@extends('master')
@section('content')


<div>
    <form>
        <div class="input-group rounded mt-3 mb-2">
            <input type="date" class="form-control rounded" value="{{request()->from_date}}" name="from_date" placeholder="Search" aria-label="Search"
                   aria-describedby="search-addon" />
            <input type="date" class="form-control rounded" value="{{request()->to_date}}" name="to_date" placeholder="Search" aria-label="Search"
                   aria-describedby="search-addon" />
            <span class="input-group-text border-0" id="search-addon">
    <button type="submit">submit</button>
  </span>
        </div>
    </form>
</div>

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
      
</tr>
@endforeach
</tbody>
      @endsection


