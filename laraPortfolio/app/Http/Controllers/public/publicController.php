<?php

namespace App\Http\Controllers\public;

use App\Models\blog;
use App\Models\about;
use App\Models\skill;
use App\Models\service;
use App\Models\education;
use App\Models\portfolio;
use App\Models\experience;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\contact;
use Illuminate\Support\Facades\Redirect;

class publicController extends Controller
{
    public function index()
    {
        $about = about::first();
        $skills = skill::where('status', '=', 'Active')->orderBy('sort')->get()->take(4);
        $educations = education::where('status', '=', 'Active')->orderBy('sort')->get()->take(3);
        $experiences = experience::where('status', '=', 'Active')->orderBy('sort')->get()->take(3);
        $services = service::where('status', '=', 'Active')->orderBy('sort')->get()->take(6);
        $portfolios = portfolio::where('status', '=', 'Active')->orderBy('sort')->get()->take(6);
        $blogs = blog::where('status', '=', 'Active')->orderBy('sort')->get()->take(6);
        return view("public.index", compact('about', 'skills', 'educations', 'experiences', 'services', 'portfolios', 'blogs'));
    }

    public function submitForm(Request $req)
    {
        $this->validate(
            $req,
            [
                "name" => "required|string",
                "email" => "required|email",
                "subject" => "required|string",
                "message" => "required|string",
            ],
        );

        $contact = new contact();
        $contact->name = $req->name;
        $contact->email = $req->email;
        $contact->subject = $req->subject;
        $contact->message = $req->message;
        $contact->status = "Pending";
        $contact->save();

        return Redirect::back()->with('msg', 'Message has been sent successfully!');
    }
}
