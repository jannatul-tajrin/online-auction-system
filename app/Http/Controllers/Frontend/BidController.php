<?php

namespace App\Http\Controllers\Frontend;
use App\Models\Item;
use App\Models\Bid;
use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class BidController extends Controller
{
    
    public function bid(Request $request,$id)
    {
        //dd($request->all());
        $maxBidResult=Bid::where('item_id',$id)->select('bidding_price', 'user_id')->orderBy('bidding_price', 'desc')->get();
        // max('bidding_price')/* ->get() */;
        $biddetails=Item::with(['bids'=>function($q){  
         $q->orderBy('bidding_price','desc');
        }])->where('id',$id)->first();
        $items=Item::find($id);
        // dd(date('H:i:s',strtotime($items->ending_time)), date('H:i:s',strtoTime(now())), date('H:i:s',strtotime($items->ending_time))>date('H:i:s',strtoTime(now())));

        // dd($items);
        $bids=Bid::all();
        // $bid=Bid::find($id);
//  dd($bid);

        return view('website.layout.bid',compact('items','bids','biddetails','maxBidResult'));
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
                return redirect()->back()->with('success','added sucessful');
        }else{
            return redirect()->back()->with('error','something wrong');
        }

        
    }
}