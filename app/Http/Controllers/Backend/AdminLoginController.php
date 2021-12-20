<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class AdminLoginController extends Controller
{
    //
    public function login()
    {
        return view ('admin.adminlogin');
    }
    public function dologin(Request $request)
    {
        $userpost=$request->except('_token');
        if(Auth::attempt($userpost))
        {
            return redirect()->route('dashboard');
        }
        else
        return redirect()->route('admin.login');
    }
    public function logout()
    {
    Auth::logout();
    return redirect()->route('admin.login');
    }
}
