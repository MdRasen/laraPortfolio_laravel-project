<?php

namespace App\Http\Controllers\public;

use App\Models\about;
use App\Models\skill;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\education;
use App\Models\experience;
use App\Models\service;

class publicController extends Controller
{
    public function index()
    {
        $about = about::first();
        $skills = skill::where('status', '=', 'Active')->orderBy('sort')->get()->take(4);
        $educations = education::where('status', '=', 'Active')->orderBy('sort')->get()->take(3);
        $experiences = experience::where('status', '=', 'Active')->orderBy('sort')->get()->take(3);
        $services = service::where('status', '=', 'Active')->orderBy('sort')->get()->take(6);
        // echo $educations;
        return view("public.index", compact('about', 'skills', 'educations', 'experiences', 'services'));
    }
}
