<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller

{
    public function login()
    {
        return view ('website.layout.login');
    }
    public function Loginstore(Request $request)
    {
        // dd($request->all());

        $userpost = $request->except('_token');
        if (Auth::attempt($userpost)){
        
            return redirect()->route('frontend.home');
        }
        else{
            return redirect()->route('login.user');
        }
    }


    public function logout(){
        Auth::logout();
        return redirect()->route('frontend.home');
    }
    public function registration()
    {
        return view ('website.layout.registration');

    }



    public function registrationstore(Request $request){
  // dd($request->all());
   
        User::create([
          
         'name'=>$request->name,
        'email'=>$request->email,
        'address'=>$request->address,
        'password'=>bcrypt($request->password),
        'phone' =>$request->phone,
        'role'=>$request->role,

        ]);
        return redirect()->route('login.user');
    }
}


