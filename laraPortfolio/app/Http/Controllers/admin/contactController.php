<?php

namespace App\Http\Controllers\admin;

use App\Models\about;
use App\Models\contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class contactController extends Controller
{
    public function viewContact()
    {
        $contacts = contact::orderByDesc('id')->get();
        $about = about::where('created_by', '=', Auth::user()->id)->first();
        return view('admin.contact.view-contact', compact('contacts', 'about'));
    }

    public function deleteMessage($msg_id)
    {
        $contact = contact::where('id', '=', $msg_id)->first();
        $contact->delete();
        return Redirect::back()->with('msg', 'Message has been deleted successfully!');
    }
}
