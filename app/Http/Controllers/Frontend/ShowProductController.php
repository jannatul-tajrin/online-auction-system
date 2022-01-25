<?php

namespace App\Http\Controllers\Frontend;
use App\Models\Item;
use Illuminate\Http\Request;

use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;

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
