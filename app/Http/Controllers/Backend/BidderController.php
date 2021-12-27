<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\Bid;
use Illuminate\Http\Request;

class BidderController extends Controller
{
    public function bidder()
    {
        
        $bids=Bid::all();
        
        return view ('admin.layout.bidder',compact('bids'));
    }
}
