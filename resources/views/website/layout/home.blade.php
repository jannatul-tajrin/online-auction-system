@extends('website.master')

@section('content')

<section id="product">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 style="color: rgba(147,9,168,0.81);">Products - Fire Sale!!!</h2>
                <hr class="star-primary">
            </div>
        </div>
        <div class="row">
        @foreach($items as $item)
            <div class="col-lg-4 product-item">
                <a href="{{route('productdetails',$item->id)}}"><img src="{{url('/uploads/'.$item->image)}}" class="img-responsive" alt="Modal_1" width="300px" height="300px"> </a>
                <h3 class="text-center">{{$item->product_name}}</h3>
                <p class="text-center">Product Type:{{$item->product_type}}</p>
                <!-- <p class="text-center">Price:{{$item->starting_price}}</p>
                <p class="text-center">time:{{$item->staring_time}}</p>
                <p class="text-center">{{$item->ending_time}}</p> -->

                <div class="caption">
                    <div class="caption-content">
                        <i class="fa fa-cart-plus fa-3x"></i>
                    </div>
                </div>
                
            </div>
        @endforeach
            
            
        </div>

    </div>
</section>

@endsection