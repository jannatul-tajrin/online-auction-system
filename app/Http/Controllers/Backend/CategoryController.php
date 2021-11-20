<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class CategoryController extends Controller
{
    public function category()
    {
        return view ('admin.layout.category');
    }
    public function create()
    {
        return view ('admin.layout.category_create');
    }
    public function store(Request $request)
    {
        // dd($request->all());
            Product::create([
                'email'=>$request->email,
                'pass'=>$request->pass,

            ]);
            return redirect()->back();
    }
}
