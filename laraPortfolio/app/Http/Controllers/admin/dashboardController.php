<?php

namespace App\Http\Controllers\admin;

use App\Models\blog;
use App\Models\skill;
use App\Models\contact;
use App\Models\service;
use App\Models\education;
use App\Models\portfolio;
use App\Models\experience;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class dashboardController extends Controller
{
    public function index()
    {
        $numSkill = skill::count();
        $numEdu = education::count();
        $numExp = experience::count();
        $numService = service::count();
        $numPort = portfolio::count();
        $numBlog = blog::count();
        $contacts = contact::orderByDesc('id')->get();
        return view("admin.dashboard", compact('numSkill', 'numEdu', 'numExp', 'numService', 'numPort', 'numBlog', 'contacts'));
    }
}
