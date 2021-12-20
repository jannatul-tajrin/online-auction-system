@extends('master')


@section('content')
    <h1>Product Details</h1>

    <p>
    <img src="{{asset('/uploads/'.$item->image)}}" alt="" style="width:100px">

    </p>
<p>Product Name: {{$item->product_name}}</p>
<p>Product Type: {{$item->product_type}}</p>
<p>Starting Price: {{$item->starting_price}}</p>
<p>Starting time: {{$item->starting_time}}</p>
<p>Ending time: {{$item->ending_time}}</p>

@endsection