<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function feedback()
    {
        $reviews=Review::all();
        return view('admin.layout.feedback',compact('reviews'));
    }
}
