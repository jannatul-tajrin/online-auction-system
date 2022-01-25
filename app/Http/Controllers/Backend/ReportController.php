<?php

namespace App\Http\Controllers\Backend;
use App\Models\Bid;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Backend\ReportController;

class ReportController extends Controller
{
    public function report(Request $request)
    {
        $biddetails = bids::whereBetween('created_at',[$request->from_date,$request->to_date])->get();
        return view ('admin.layout.report');
    }
}
