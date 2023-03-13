<?php

namespace App\Http\Controllers\admin;

use App\Models\experience;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class experienceController extends Controller
{
    public function createExp()
    {
        $experiences = experience::where('created_by', '=', Auth::user()->id)->orderBy('sort')->get();
        return view('admin.experience.create-exp', compact('experiences'));
    }

    public function createExpSubmit(Request $req)
    {
        $this->validate(
            $req,
            [
                "exp_name" => "required|string|regex:/^[A-Z a-z,.-]+$/i",
                "start_date" => "required",
                "short_desc" => "required|string|max:190",
                "sort" => "required|numeric",
            ],
            [
                'exp_name.regex' => 'Name cannot contain special characters or numbers.',
            ]
        );

        $exp = new experience();
        $exp->experience_name = $req->exp_name;
        $exp->start_date = $req->start_date;
        if ($req->end_date) {
            $exp->end_date = $req->end_date;
        } else {
            $exp->end_date = "Present";
        }
        $exp->short_desc = $req->short_desc;
        $exp->sort = $req->sort;
        $exp->status = $req->status;
        $exp->created_by = Auth::user()->id;
        $exp->save();
        return Redirect::back()->with('msg', 'Experience has been created successfully!');
    }

    public function editExp($exp_id)
    {
        $experiences = experience::where('created_by', '=', Auth::user()->id)->orderBy('sort')->get();
        $experience = experience::where('id', '=', $exp_id)->first();
        return view('admin.experience.edit-exp', compact('experiences', 'experience'));
    }

    public function editExpSubmit(Request $req)
    {
        $this->validate(
            $req,
            [
                "exp_name" => "required|string|regex:/^[A-Z a-z,.-]+$/i",
                "start_date" => "required",
                "short_desc" => "required|string|max:190",
                "sort" => "required|numeric",
            ],
            [
                'exp_name.regex' => 'Name cannot contain special characters or numbers.',
            ]
        );

        $exp = experience::where('id', '=', $req->exp_id)->first();
        $exp->experience_name = $req->exp_name;
        $exp->start_date = $req->start_date;
        if ($req->end_date) {
            $exp->end_date = $req->end_date;
        } else {
            $exp->end_date = "Present";
        }
        $exp->short_desc = $req->short_desc;
        $exp->sort = $req->sort;
        $exp->status = $req->status;
        $exp->update();
        return Redirect::back()->with('msg', 'Experience has been updated successfully!');
    }

    public function deleteExp($exp_id)
    {
        $experience = experience::where('id', '=', $exp_id)->first();
        $experience->delete();
        return Redirect::back()->with('msg', 'Experience has been deleted successfully!');
    }
}
