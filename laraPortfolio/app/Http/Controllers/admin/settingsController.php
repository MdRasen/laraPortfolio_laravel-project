<?php

namespace App\Http\Controllers\admin;

use App\Models\menu;
use App\Models\about;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class settingsController extends Controller
{
    function logo_fav()
    {
        $about = about::where('created_by', '=', Auth::user()->id)->first();
        return view("admin.setting-control.logo-fav", compact('about'));
    }

    function logo_update(Request $req)
    {
        $this->validate(
            $req,
            [
                "nickname" => "required|string|max:10",
            ]
        );
        $about = about::where('created_by', '=', Auth::user()->id)->first();
        if (!$about) {
            $about = new about();
            $about->nickname = $req->nickname;
            $about->created_by = Auth::user()->id;
            $about->save();
            return redirect('admin/logo-fav')->with('logo_msg', 'Logo has been created successfully!');
        } else {
            $about->nickname = $req->nickname;
            $about->update();
            return redirect('admin/logo-fav')->with('logo_msg', 'Logo has been updated successfully!');
        }
    }

    function fav_update(Request $req)
    {
        $this->validate(
            $req,
            [
                "favicon" => "required|mimes:jpg,png,jpeg,svg",
            ],
            [
                'favicon.required' => 'Please select a picture!',
                'favicon.mimes' => 'The profile pic must be a jpg, png or jpeg!',
            ]
        );

        $extension = $req->file('favicon')->getClientOriginalExtension();
        $ficonname = Auth::user()->id . time() . "." . $extension;

        $req->file('favicon')->storeAs('public/favicon/', $ficonname);

        $about = about::where('created_by', '=', Auth::user()->id)->first();
        if (!$about) {
            $about = new about();
            $about->favicon = $ficonname;
            $about->created_by = Auth::user()->id;
            $about->save();
        } else {
            $destination = 'storage/favicon/' . $about->favicon;
            if (file_exists(public_path($destination))) {
                unlink($destination);
            }
            $about->favicon = $ficonname;
            $about->update();
        }
        return redirect('admin/logo-fav')->with('fav_msg', 'Favicon has been updated successfully!');
    }
}
