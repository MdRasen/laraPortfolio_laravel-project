<?php

namespace App\Http\Controllers\admin;

use App\Models\about;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class aboutController extends Controller
{
    public function viewabout()
    {
        $about = about::where('created_by', '=', Auth::user()->id)->first();
        if (!$about) {
            $about = new about();
            $about->created_by = Auth::user()->id;
            $about->save();
        }
        return view("admin.about.view-about", compact('about'));
    }

    public function editabout()
    {
        $about = about::where('created_by', '=', Auth::user()->id)->first();
        return view("admin.about.edit-about", compact('about'));
    }

    public function updateImage(Request $req)
    {
        $this->validate(
            $req,
            [
                "about_image" => "required|mimes:jpg,png,jpeg",
            ],
            [
                'about_image.required' => 'Please select a picture!',
                'about_image.mimes' => 'The profile pic must be a jpg, png or jpeg!',
            ]
        );
        $about = about::where('created_by', '=', Auth::user()->id)->first();

        if ($about->image) {
            $destination = 'storage/about_image/' . $about->image;
            if (file_exists(public_path($destination))) {
                unlink($destination);
            }
        }

        $extension = $req->file('about_image')->getClientOriginalExtension();
        $imagename = time() . "." . $extension;
        $req->file('about_image')->storeAs('public/about_image/', $imagename);
        $about->image = $imagename;
        $about->update();
        return redirect('admin/about/view-about')->with('msg', 'Profile has been updated successfully!');
    }

    public function editaboutSubmit(Request $req)
    {
        $this->validate(
            $req,
            [
                "full_name" => "required|regex:/^[A-Z a-z,.-]+$/i",
                "nickname" => "required|max:10",
                "designation" => "required",
                "short_description" => "required",
                "degree" => "required",
                "birthday" => "required",
                "age" => "required|numeric",
                "email" => "required|email",
                "phone" => "required|numeric|digits:10",
                "city" => "required",
            ],
            [
                'full_name.regex' => 'Name cannot contain special characters or numbers.',
            ]
        );
        $about = about::where('created_by', '=', Auth::user()->id)->first();
        $about->full_name = $req->full_name;
        $about->nickname = $req->nickname;
        $about->designation = $req->designation;
        $about->short_description = $req->short_description;
        $about->degree = $req->degree;
        $about->gender = $req->gender;
        $about->birthday = $req->birthday;
        $about->age = $req->age;
        $about->email = $req->email;
        $about->phone = $req->phone;
        $about->city = $req->city;
        $about->freelance = $req->freelance;
        $about->website_link = $req->website_link;

        if ($req->my_file) {
            if ($about->cv_file) {
                $destination = 'storage/cv_file/' . $about->cv_file;
                if (file_exists(public_path($destination))) {
                    unlink($destination);
                }
            }

            $extension = $req->file('my_file')->getClientOriginalExtension();
            $filename = time() . "." . $extension;
            $req->file('my_file')->storeAs('public/cv_file/', $filename);
            $about->cv_file = $filename;
        }

        $about->update();

        return redirect('admin/about/view-about')->with('msg', 'Profile has been updated successfully!');
    }
}
