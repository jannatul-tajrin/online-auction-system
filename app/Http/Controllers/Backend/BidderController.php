<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BidderController extends Controller
{
    public function bidder()
    {
        return view ('admin.layout.bidder');
    }
}
