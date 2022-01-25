@extends('master')
@section('content')

<h1>Bid_details</h1>



<h4 style="text-align:center">product Name : {{$biddetails->product_name}}</h4>
<h5 style="text-align:center">Result : {{$maxBidResult}}</h5>
<hr>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Bidding_price</th>
      <th scope="col">User_Id</th>
      <th scope="col">status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

  @foreach($biddetails->bids as $biddetail)

    <tr>
      <th scope="row">1</th>
      <td>{{$biddetail->bidding_price}}</td>
      <td>{{$biddetail->user->name}}</td>
      <td>{{$biddetail->status}}</td>
      


<td>



<div class="dropdown">
  <button class="btn btn-primary dropdown-toggle"href="#" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
    Action
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <li><a  type="button" class="dropdown-item"class="btn btn-success" href="{{route('status.update',$biddetail->id)}}">Approved</a></li></button>
    
    <li><a type="button" class="dropdown-item"class="btn btn-danger" href="{{route('status.cancel',$biddetail->id)}}">Cancel</a></li></button>
    
  </ul>
</div>

</td>
    </tr>
    @endforeach
    
    
  </tbody>
</table>





@endsection