@extends('website.master')
@section('content')

<div class="row" style="margin:25px">
  <div class="col-sm-4"></div>
  <div class="col-sm-4">
<form method="post" action="{{route('login.store')}}">
    @csrf

  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password"class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Log in</button>
</form>
</div>
  <div class="col-sm-4"></div>
</div>



@endsection