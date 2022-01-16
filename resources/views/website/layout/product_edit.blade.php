@extends('master')
@section('content')
<form action="{{route('product.update',$item->id)}}" method='post' enctype= multipart/form-data>
  @method('PUT') 
   @csrf
    <form>
  <div class="form-group">
    <label for="exampleInputproduct_name">product_name</label>
    <input name="product_name"value="{{$item->product_name}}" type="product_name" class="form-control" id="exampleInputproduct_name" aria-describedby="product_name" placeholder="product_name">
    <small id="string" class="form-text text-muted"></small>
  </div>
  <div class="form-group">
    <label for="exampleInputproduct_type">product_type</label>
    <input name="product_type"value="{{$item->product_type}}"type="string" class="form-control" id="exampleInputproduct_type" placeholder="product_type">
  </div>
  <div class="form-group">
    <label for="exampleInputstarting_bid">starting_price</label>
    <input name="starting_price"value="{{$item->starting_price}}"type="string" class="form-control" id="exampleInputstarting_price" placeholder="starting_price">
  </div>

  <div class="form-group">
    <label for="exampleInputstarting_time">starting_time</label>
    <input name="starting_time"value="{{$item->starting_time}}" type="string" class="form-control" id="exampleInputstarting_time" placeholder="starting_time">
  </div>

  <div class="form-group">
    <label for="exampleInputending_time">ending_time</label>
    <input name="ending_time"value="{{$item->ending_time}}"type="string" class="form-control" id="exampleInputending_time" placeholder="ending_time">
  </div>

  <div class="form-group">
    <label for="exampleInputproduct_description">product_description</label>
    <input name="product_description"value="{{$item->product_description}}"type="string" class="form-control" id="exampleInputproduct_description" placeholder="product_description">
  </div>

  <div class="form-group">
    <label for="exampleInputimage">image</label>
    <input name="image" value="{{$item->image}}"type="file" class="form-control" id="exampleInputimage" placeholder="image">
  </div>
  
  
  <button type="submit" class="btn btn-primary">update</button>
</form>

@endsection