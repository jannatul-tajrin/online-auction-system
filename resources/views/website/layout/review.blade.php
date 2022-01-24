@extends('website.master')
@section('content')
<div class="row" style="margin:25px">
  <div class="col-sm-4"></div>
  <div class="col-sm-4">
<form method="post" action="{{route('frontend.review.store')}}">
    @csrf
  
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  

  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input name='name' type='text' class="form-control" id="exampleInputEmail1" aria-describedby="name" placeholder="name">
  </div>
  
  <div class="form-group">
    <label for="exampleFormControlTextarea1"> text</label>
    <textarea name='text' type='text' class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>

  <button type="submit" class="btn btn-primary">submit</button>
  @endsection