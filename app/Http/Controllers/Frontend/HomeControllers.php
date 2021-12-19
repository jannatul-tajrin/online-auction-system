<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Item;


class HomeControllers extends Controller
{
    public function Home()
    {
        $items=Item::all();
        return view ('website.layout.Home',compact('items'));
    }
}
