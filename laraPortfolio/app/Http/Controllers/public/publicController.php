<?php

namespace App\Http\Controllers\public;

use App\Models\about;
use App\Models\skill;
use App\Models\service;
use App\Models\education;
use App\Models\portfolio;
use App\Models\experience;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\blog;

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
}
