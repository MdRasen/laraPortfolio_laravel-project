<?php

namespace App\Http\Controllers\admin;

use App\Models\education;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class educationController extends Controller
{
    public function createEdu()
    {
        $educations = education::where('created_by', '=', Auth::user()->id)->orderBy('sort')->get();
        return view('admin.education.create-edu', compact('educations'));
    }

    public function createEduSubmit(Request $req)
    {
        $this->validate(
            $req,
            [
                "exam_name" => "required|string|regex:/^[A-Z a-z,.-]+$/i",
                "start_date" => "required",
                "short_desc" => "required|string|max:190",
                "sort" => "required|numeric",
            ],
            [
                'exam_name.regex' => 'Name cannot contain special characters or numbers.',
            ]
        );

        $education = new education();
        $education->exam_name = $req->exam_name;
        $education->start_date = $req->start_date;
        if ($req->end_date) {
            $education->end_date = $req->end_date;
        } else {
            $education->end_date = "Present";
        }
        $education->short_desc = $req->short_desc;
        $education->sort = $req->sort;
        $education->status = $req->status;
        $education->created_by = Auth::user()->id;
        $education->save();
        return Redirect::back()->with('msg', 'Eduation has been created successfully!');
    }

    public function editEdu($edu_id)
    {
        $educations = education::where('created_by', '=', Auth::user()->id)->orderBy('sort')->get();
        $education = education::where('id', '=', $edu_id)->first();
        return view('admin.education.edit-edu', compact('educations', 'education'));
    }

    public function editEduSubmit(Request $req)
    {
        $this->validate(
            $req,
            [
                "exam_name" => "required|string|regex:/^[A-Z a-z,.-]+$/i",
                "start_date" => "required",
                "short_desc" => "required|string|max:190",
                "sort" => "required|numeric",
            ],
            [
                'exam_name.regex' => 'Name cannot contain special characters or numbers.',
            ]
        );

        $education = education::where('id', '=', $req->edu_id)->first();
        $education->exam_name = $req->exam_name;
        $education->start_date = $req->start_date;
        if ($req->end_date) {
            $education->end_date = $req->end_date;
        } else {
            $education->end_date = "Present";
        }
        $education->short_desc = $req->short_desc;
        $education->sort = $req->sort;
        $education->status = $req->status;
        $education->update();
        return Redirect::back()->with('msg', 'Eduation has been updated successfully!');
    }

    public function deleteEdu($edu_id)
    {
        $education = education::where('id', '=', $edu_id)->first();
        $education->delete();
        return Redirect::back()->with('msg', 'Education has been deleted successfully!');
    }
}
