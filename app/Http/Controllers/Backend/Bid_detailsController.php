<?php

namespace App\Http\Controllers\Backend;
use App\Models\Bid;
use App\Models\Item;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Bid_detailsController extends Controller
{

    
            
        
    public function Bid_details($id)

    {
    
        $maxBidResult = Bid::where('item_id',$id)->max('bidding_price');
        $biddetails=Item::with(['bids'=> function($q){
            $q->orderBy('bidding_price','desc');
        }])->where('id',$id)->first();
        return view ('admin.layout.bid details',compact('biddetails','maxBidResult'));
        
        
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


public function status_cancel($id)
{

$bidstatus=Bid::find($id);
    if($bidstatus->status)
       {
          $bidstatus->update([
               'status' => 'cancelled'
           ]);
        }
           return redirect()->back();

    }
}