@extends('master')

@section('content')
<a href="{{route('product.create')}}" class="btn btn-primary">Add bid</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">product_name</th>
      <th scope="col">product_type</th>
      <th scope="col">starting_price</th>
      <th scope="col">starting_time</th>
      <th scope="col">ending_time</th>
      <th scope="col">image</th>
    </tr>
  </thead>
  <tbody>
  @foreach($items as $key=>$item)
  <tr>
       <td>{{$key+1}}</td>
       <td>{{$item->product_name}}</td>
       <td>{{$item->product_type}}</td>
       <td>{{$item->starting_price}}</td>
       <td>{{$item->starting_time}}</td>
       <td>{{$item->ending_time}}</td>  
       
    <td><img src="{{asset('/uploads/'.$item->image)}}" alt="" style="width:100px"></td>   
       
 </tr>
 @endforeach
  </tbody>
</table>

@endsection