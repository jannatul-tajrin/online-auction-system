<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Item;

class ProductController extends Controller
{
    public function product()
    {
        $items =Item::all();
        return view ('admin.layout.product',compact('items'));
}
    public function create()
{

    return view ('admin.layout.item_create');   
}
public function store(Request $request)
    {
       // dd($request->all());
            item::create([
                'product_name'=>$request->product_name,
                'product_type'=>$request->product_type,
                'starting_price'=>$request->starting_price,
                'staring_time'=>$request->starting_time,
                'ending_time'=>$request->ending_time,


            ]);
            return redirect()->back();
    }
}



