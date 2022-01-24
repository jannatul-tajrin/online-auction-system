@extends('master')

@section('content')
<h1>Review</h1>

<table class="table table-striped">
  <thead>
    <tr>
    <th scope="col">#</th> 
      <th scope="col">Email Address</th>
      <th scope="col">Name</th>
      <th scope="col">Text</th>
      
    </tr>
  </thead>
  <tbody>
  @foreach($reviews as $review)
    <tr>
      <th scope="row">1</th>
      <td>{{$review->email_address}}</td>
      <td>{{$review->name}}</td>
      <td>{{$review->text}}</td>
      @endforeach


@endsection