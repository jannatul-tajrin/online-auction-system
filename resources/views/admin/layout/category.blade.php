@extends('master')

@section('content')
<a href="{{route('category.create')}}" class="btn btn-primary">Add category</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">product_name</th>
      <th scope="col">product_type</th>
      <th scope="col">product_price</th>
    </tr>
  </thead>
  <tbody>
    
   @foreach($products as $key=>$product)
   <tr>
       <td>{{$key+1}}</td>
       <td>{{$product->product_name}}</td>
       <td>{{$product->product_type}}</td>
       <td>{{$product->product_price}}</td>
 </tr>
  @endforeach
  </tbody>
</table>

@endsection