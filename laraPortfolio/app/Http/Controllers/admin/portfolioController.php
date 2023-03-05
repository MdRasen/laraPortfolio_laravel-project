<?php

namespace App\Http\Controllers\admin;

use App\Models\portfolio;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class portfolioController extends Controller
{
    public function createPortfolio()
    {
        $portfolios = portfolio::where('created_by', '=', Auth::user()->id)->get();
        return view('admin.portfolio.create-portfolio', compact('portfolios'));
    }

    public function createPortfolioSubmit(Request $req)
    {
        $this->validate(
            $req,
            [
                "portfolio_name" => "required|string",
                "portfolio_image" => "required|mimes:jpg,png,jpeg",
                "sort" => "required|numeric",
            ],
            [
                'portfolio_image.required' => 'Please select a picture!',
                'portfolio_image.mimes' => 'The profile pic must be a jpg, png or jpeg!',
            ]
        );

        $extension = $req->file('portfolio_image')->getClientOriginalExtension();
        $image_name = Auth::user()->id . time() . "." . $extension;

        $req->file('portfolio_image')->storeAs('public/portfolio/', $image_name);

        $portfolio = new portfolio();
        $portfolio->portfolio_name = $req->portfolio_name;
        $portfolio->portfolio_image = $image_name;
        $portfolio->sort = $req->sort;
        $portfolio->status = $req->status;
        $portfolio->created_by = Auth::user()->id;
        $portfolio->save();

        return Redirect::back()->with('msg', 'Portfolio has been created successfully!');
    }
}
