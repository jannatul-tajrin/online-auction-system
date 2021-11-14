<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('admin.layout.contents');
    }

    public function catagory(){
        return view('admin.layout.catagory');
    }
}