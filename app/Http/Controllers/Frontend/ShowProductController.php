<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Item;

use Illuminate\Http\Request;

class ShowProductController extends Controller
{
// public function product()
// {
//     return view ('website.layout.showproduct');
// }

public function productDetails($id)
{
   $item =  Item::find($id);
   return view ('website.layout.showproduct',compact('item'));
}

}
