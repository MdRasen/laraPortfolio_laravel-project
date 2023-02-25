<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function index(){
        // $numCategory = category::count();
        // $numPost = post::count();
        // $numUser = user::count();

        // $posts = post::all();

        // return view("admin.dashboard", compact('numCategory', 'numPost', 'numUser', 'posts'));
        return view("admin.dashboard");
        // echo "ok";
    }
}