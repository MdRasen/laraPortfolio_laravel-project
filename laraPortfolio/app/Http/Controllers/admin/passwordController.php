<?php

namespace App\Http\Controllers\admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class passwordController extends Controller
{
    public function changePassword()
    {
        return view("admin.change-pass");
    }

    public function changePasswordSubmit(Request $req)
    {
        $this->validate(
            $req,
            [
                "prev_pass" => "required",
                "new_pass" => "required|string|min:8",
                "confirm_pass" => "required|same:new_pass",
            ],
        );

        $user = User::where('id', '=', Auth::user()->id)->first();

        if (Hash::check($req->prev_pass, $user->password)) {
            $user->password = hash::make($req->new_pass);
            $user->update();
            return redirect('admin/dashboard')->with('msg', 'Password has been updated successfully!');
        } else {
            return Redirect::back()->with('msg', 'The password you entered is incorrect!');
        }
    }
}
