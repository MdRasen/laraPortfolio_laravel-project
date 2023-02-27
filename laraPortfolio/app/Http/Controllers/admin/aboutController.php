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
}
