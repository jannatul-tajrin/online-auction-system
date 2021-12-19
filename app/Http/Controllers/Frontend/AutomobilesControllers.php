<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AutomobilesControllers extends Controller

{
    public function Automobiles()
    {
        return view ('website.partials.automobiles');
    }
}