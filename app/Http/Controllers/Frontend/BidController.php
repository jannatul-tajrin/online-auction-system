<?php

namespace App\Http\Controllers\Frontend;
use App\Models\Item;
use App\Models\Bid;
use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BidController extends Controller
{
    public function bid(Request $request,$id)
    {
        
        $items=Item::find($id);
        $bids=Bid::all();
        return view('website.layout.bid',compact('items','bids'));
    }


    public function store(Request $request,$id)
    {
        $item = Item::find($id);

        if($item->starting_price < $request->bidding_price){
            Bid::create([
                'item_id'=>$item->id,
                'bidding_price'=>$request->bidding_price,
                'user_id'=>auth()->user()->id,
            ]);
                return redirect()->back();
        }else{
            return redirect()->back();
        }
       

    }
}