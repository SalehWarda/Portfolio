<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Models\admin\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function getLogin()
    {
        //
        return view('admin.auth.login');
    }

    public function logout()
    {
        //
        Auth::logout();
        return redirect()->route('admin.getLogin');

    }


    public function login(LoginRequest $request)
    {
        // make validation
        // insert to DB
        $admin = Admin::Selection()->first();

        $remember_me = $request->has('remember_me') ? true : false;

        if (auth()->guard('admin')->attempt(['email' => $request->input("email"), 'password' => $request->input("password")], $remember_me)) {
            return redirect()->route('admin.dashboard')->with([
                'message' => "Hello, $admin->name!",
                'alert-type' => 'success',
            ]);
        } else {
            return redirect()->back()->with([
                'message' => 'There is an error in the data, please try again',
                'alert-type' => 'danger',
            ]);
        };
    }


}
