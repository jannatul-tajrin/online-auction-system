@extends('website.master')

@section('content')

<h1>BID</h1>
<div><img src="{{url('/uploads/'.$items->image)}}" class="img-responsive" alt="Modal_1" width="300px" height="300px">


<div style="margin:40px">Price:{{$items->starting_price}}</div>
<div style="margin:40px">Time:{{$items->starting_time}}</div>

<form action="{{route('home.bid.store',$items->id)}}" method="post">
    @csrf
<div class="col-lg-3">
            <div class="form-group input-group">
                <span class="input-group-addon"><i class="fa fa-rupee"></i></span>
                <input name="bidding_price" type="text" class="form-control" placeholder="Bidding starts from" >
                <button type="submit" class="btn btn-success">Success</button>
            </div>     

</div>
</form>

<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Product_Id</th>
      <th scope="col">Bidding_price</th>
      <th scope="col">User_Id</th>
      <th scope="col">status</th>
    </tr>
  </thead>
  <tbody>
@foreach($bids as $bid)
    <tr>
      <th scope="row">1</th>
      <td>{{$bid->item_id}}</td>
      <td>{{$bid->bidding_price}}</td>
      <td>{{$bid->user_id}}</td>
      <td>{{$bid->status}}</td>
    </tr>
    @endforeach
    
    
  </tbody>
</table>



@endsection
