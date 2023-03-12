<?php

namespace App\Http\Controllers\public;

use App\Models\about;
use App\Models\skill;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class publicController extends Controller
{
    public function index()
    {
        $about = about::first();
        $skills = skill::where('status', '=', 'Active')->orderBy('sort')->get()->take(4);
        return view("public.index", compact('about', 'skills'));
    }
}
