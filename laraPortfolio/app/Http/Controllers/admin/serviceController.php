<?php

namespace App\Http\Controllers\admin;

use App\Models\service;
use App\Models\experience;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class serviceController extends Controller
{
    public function createService()
    {
        $services = service::where('created_by', '=', Auth::user()->id)->orderBy('sort')->get();
        return view('admin.services.create-service', compact('services'));
    }

    public function createServiceSubmit(Request $req)
    {
        $this->validate(
            $req,
            [
                "service_name" => "required|string|regex:/^[A-Z a-z,.-]+$/i",
                "icon_class" => "required",
                "short_desc" => "required|string|max:190",
                "sort" => "required|numeric",
            ],
            [
                'service_name.regex' => 'Name cannot contain special characters or numbers.',
            ]
        );

        $service = new service();
        $service->service_name = $req->service_name;
        $service->icon_class = $req->icon_class;
        $service->short_desc = $req->short_desc;
        $service->sort = $req->sort;
        $service->status = $req->status;
        $service->created_by = Auth::user()->id;
        $service->save();
        return Redirect::back()->with('msg', 'Service has been created successfully!');
    }

    public function editService($ser_id)
    {
        $services = service::where('created_by', '=', Auth::user()->id)->orderBy('sort')->get();
        $service = service::where('id', '=', $ser_id)->first();
        return view('admin.services.edit-service', compact('services', 'service'));
    }

    public function editServiceSubmit(Request $req)
    {
        $this->validate(
            $req,
            [
                "service_name" => "required|string|regex:/^[A-Z a-z,.-]+$/i",
                "icon_class" => "required",
                "short_desc" => "required|string|max:190",
                "sort" => "required|numeric",
            ],
            [
                'service_name.regex' => 'Name cannot contain special characters or numbers.',
            ]
        );

        $service = service::where('id', '=', $req->service_id)->first();
        $service->service_name = $req->service_name;
        $service->icon_class = $req->icon_class;
        $service->short_desc = $req->short_desc;
        $service->sort = $req->sort;
        $service->status = $req->status;
        $service->update();
        return Redirect::back()->with('msg', 'Service has been updated successfully!');
    }

    public function deleteService($ser_id)
    {
        $service = service::where('id', '=', $ser_id)->first();
        $service->delete();
        return Redirect::back()->with('msg', 'Service has been deleted successfully!');
    }
}
