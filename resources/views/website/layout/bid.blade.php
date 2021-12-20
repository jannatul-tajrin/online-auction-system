@extends('website.master')

@section('content')

<h1>BID</h1>
<div><img src="{{url('/uploads/'.$items->image)}}" class="img-responsive" alt="Modal_1" width="300px" height="300px">


<div style="margin:40px">Price:{{$items->starting_price}}</div>

<div class="col-lg-3">
            <div class="form-group input-group">
                <span class="input-group-addon"><i class="fa fa-rupee"></i></span>
                <input type="text" class="form-control" placeholder="Bidding starts from" >
            </div>

</div>

<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Product Id</th>
      <th scope="col">Bidding_price</th>
      <th scope="col">User_Id</th>
      <th scope="col">status</th>
    </tr>
  </thead>
  <tbody>

    <tr>
      <th scope="row">1</th>
      <td>A</td>
      <td>B</td>
      <td>C</td>
      <td>C</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan=>Larry the Bird</td>
      <td>@twitter</td>
      <td>@twitter</td>
      <td>@twitter</td>
      
      
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      
    </tr>
    
    
  </tbody>
</table>



@endsection
