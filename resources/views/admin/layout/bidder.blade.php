@extends('master')

@section('content')
<h1>BID</h1>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Product_Id</th>
      <th scope="col">Bidding_price</th>
      <th scope="col">User_Id</th>
      <th scope="col">status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($bids as $bid)
    <tr>
      <th scope="row">1</th>
      <td>{{$bid->item_id}}</td>
      <td>{{$bid->bidding_price}}</td>
      <td>{{$bid->user->name}}</td>
      <td>{{$bid->status}}</td>
      





<td>


<!-- <div class="dropdown">
  <button class="btn btn-primary dropdown-toggle"herf="{{route('admin.bidder',)}}" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Action
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
  <a type="button" class="btn btn-success"href="{{route('admin.bidder')}}">Approved</button>
    <a type="button" class="btn btn-danger"href="{{route('admin.bidder')}}">Cancle</button>
  </div>
</div> -->

<div class="dropdown">
  <button class="btn btn-primary dropdown-toggle"href="#" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
    Action
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <li><a  type="button"class="dropdown-item"class="btn btn-success" href="#">Approved</a></li></button>
    <li><a type="button" class="dropdown-item"class="btn btn-danger" href="#">Cancle</a></li></button>
    
  </ul>
</div>

</td>
    </tr>
    @endforeach
    
    
  </tbody>
</table>



@endsection
