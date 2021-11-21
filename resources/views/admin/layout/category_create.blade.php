@extends('master')
@section('content')
<form action="{{route('category.store')}}" method='post'>
    @csrf
  <div class="mb-3">
    <label for="exampleInputproduct_name" class="form-label">product_name</label>
    <input name='product_name' type="product_name" class="form-control" id="exampleInputproduct_name" aria-describedby="product_name">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputproduct_type" class="form-label">product_type</label>
    <input name='product_type' type="product_type" class="form-control" id="exampleInputproduct_type" aria-describedby="product_type">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputproduct_price" class="form-label">product_price</label>
    <input name='product_price' type="product_price" class="form-control" id="exampleInputproduct_price">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


@endsection