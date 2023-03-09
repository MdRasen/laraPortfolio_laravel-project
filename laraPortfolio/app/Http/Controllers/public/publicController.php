<?php

namespace App\Http\Controllers\public;

use App\Models\about;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class publicController extends Controller
{
    public function index(){
        $about = about::first();
        
        return view("public.index", compact('about'));
    }
}
