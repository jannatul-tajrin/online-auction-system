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
    public function status_update($id)
    
{   
    // dd($request->all());
    // dd($id);
    $bidstatus=Bid::find($id);
    if($bidstatus->status)
       {
          $bidstatus->update([
               'status' => 'approved'
           ]);
       }else{
        $bidstatus->update([
            'status' => 'cancelled'
        ]);
       }

    return redirect()->back();
}
}
