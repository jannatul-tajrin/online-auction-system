<?php

namespace App\Http\Controllers\Frontend;
use App\Models\Review;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function Review()
{
    $reviews=Review::all();
    return view ('website.layout.review',[
        'reviews'=>$reviews
    ]);

}
public function create()
    {
        return view ('website.layout.review');
    }
    public function store(Request $request)
    {
        //dd($request->all());
        review::create([
            'email_address'=>$request->email,
            'name'=>$request->name,
            'text'=>$request->text,

        ]);
        return redirect()->back();
}
}

