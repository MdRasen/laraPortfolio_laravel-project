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
        $portfolios = portfolio::where('created_by', '=', Auth::user()->id)->orderBy('sort')->get();
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

    public function editPortfolio($port_id)
    {
        $portfolios = portfolio::where('created_by', '=', Auth::user()->id)->orderBy('sort')->get();
        $portfolio = portfolio::where('id', '=', $port_id)->first();
        return view('admin.portfolio.edit-portfolio', compact('portfolios', 'portfolio'));
    }

    public function editPortfolioSubmit(Request $req)
    {
        $this->validate(
            $req,
            [
                "portfolio_name" => "required|string",
                "portfolio_image" => "nullable|mimes:jpg,png,jpeg",
                "sort" => "required|numeric",
            ],
        );
        $portfolio = portfolio::where('id', '=', $req->port_id)->first();

        if ($req->portfolio_image) {
            $extension = $req->file('portfolio_image')->getClientOriginalExtension();
            $image_name = Auth::user()->id . time() . "." . $extension;
            $destination = 'storage/portfolio/' . $portfolio->portfolio_image;

            if (file_exists(public_path($destination))) {
                unlink($destination);
                $req->file('portfolio_image')->storeAs('public/portfolio/', $image_name);
            } else {
                $req->file('portfolio_image')->storeAs('public/portfolio/', $image_name);
            }
        }

        $portfolio->portfolio_name = $req->portfolio_name;
        if ($req->portfolio_image) {
            $portfolio->portfolio_image = $image_name;
        }
        $portfolio->sort = $req->sort;
        $portfolio->status = $req->status;
        $portfolio->update();

        return Redirect::back()->with('msg', 'Portfolio has been updated successfully!');
    }

    public function deletePortfolio($port_id)
    {
        $portfolio = portfolio::where('id', '=', $port_id)->first();
        $destination = 'storage/portfolio/' . $portfolio->portfolio_image;

        if (file_exists(public_path($destination))) {
            unlink($destination);
        }

        $portfolio->delete();
        return Redirect::back()->with('msg', 'Portfolio has been deleted successfully!');
    }
}
