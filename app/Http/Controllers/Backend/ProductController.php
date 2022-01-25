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
public function store(Request $request){
    // dd($request->all());
    $filename='';
    if($request->hasfile('image')){
        
    $file=$request->file('image');
    $filename=(date('Ymdhms')).'.'.$file->getClientOriginalExtension();
    // dd($filename);
    $file->storeAs('/uploads',$filename);
    }
    

       // dd($request->all());
            item::create([
                'product_name'=>$request->product_name,
                'product_type'=>$request->product_type,
                'starting_price'=>$request->starting_price,
                'starting_time'=>date('H:i:s', strtotime($request->starting_time)),
                'ending_time'=>date('H:i:s', strtotime($request->ending_time)),
                'product_description'=>$request->product_description,
                
                'image'=>$filename,
                       

            ]);
            return redirect()->back();
    }

    public function product_view($id){
        $item=Item::find($id);
        return view('admin.layout.product_view',compact('item'));
    }

    public function product_delete($id){
        Item::find($id)->delete();
        return redirect()->back()->with('success','Product Deleted.');
    }


        public function product_edit($id)
        {
            $item=Item::find($id);
            return view('website.layout.product_edit',compact('item'));


    }
    public function product_update(Request $request,$id)
    
{

    $item=Item::find($id);



$filename='';
    if($request->hasfile('image'))
    {
        
    $file=$request->file('image');
    
    $filename=(date('Ymdhms')).'.'.$file->getClientOriginalExtension();
    $file->storeAs('/uploads',$filename);
}


$item->update([
    'product_name'=>$request->product_name,
    'product_type'=>$request->product_type,
    'starting_price'=>$request->starting_price,
    'staring_time'=>$request->date('H:i:s', strtotime($request->starting_time)),
    'ending_time'=>$request->date('H:i:s', strtotime($request->ending_time)),
    'product_description'=>$request->product_description,
    
    'image'=>$filename,
           

]);
return redirect()->route('admin.product')->with('success','product details update successfully');


    

}

}