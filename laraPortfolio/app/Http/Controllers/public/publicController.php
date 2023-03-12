<?php

namespace App\Http\Controllers\public;

use App\Models\about;
use App\Models\skill;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\education;
use App\Models\experience;

class publicController extends Controller
{
    public function index()
    {
        $about = about::first();
        $skills = skill::where('status', '=', 'Active')->orderBy('sort')->get()->take(4);
        $educations = education::where('status', '=', 'Active')->orderBy('sort')->get()->take(3);
        $experiences = experience::where('status', '=', 'Active')->orderBy('sort')->get()->take(3);
        // echo $educations;
        return view("public.index", compact('about', 'skills', 'educations', 'experiences'));
    }
}
