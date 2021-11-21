<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class CategoryController extends Controller
{
    public function category()
    {
        $products=Product::all();
        return view ('admin.layout.category',[
            'products'=>$products
        ]);
    }
    public function create()
    {
        return view ('admin.layout.category_create');
    }
    public function store(Request $request)
    {
        // dd($request->all());
            Product::create([
                'product_name'=>$request->product_name,
                'product_type'=>$request->product_type,
                'product_price'=>$request->product_price,


            ]);
            return redirect()->back();
    }
}
