<?php

namespace App\Http\Controllers\Frontend;
use App\Models\Item;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BidController extends Controller
{
    public function bid(Request $request,$id)
    {
        
        $items=Item::find($id);
        return view('website.layout.bid',compact('items'));
    }


 public function create()
    {
        return view ('Frontend.create_bid');
    }



    public function store(Request $request)
    {
bid::create([
    'Product Id'=>$request->product_name,
    'Bidding_price'=>$request->product_type,
    'User_Id'=>$request->starting_price,
    'status'=>$request->starting_time,
    


]);
return redirect()->back();

    }
}