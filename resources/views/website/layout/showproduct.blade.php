@extends('website.master')

@section('content')
<div class="container">

    <!-- Portfolio Item Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Product Item
                <small>{{$item->product_name}}</small>
            </h1>
        </div>
    </div>
    <!-- /.row -->

    <!-- Portfolio Item Row -->
    <div class="row">

        <div class="col-md-8">
            <img class="img-responsive" src="{{url('/uploads/'.$item->image)}}" alt="product_image">
        </div>

        <div class="col-md-4">
            <h3>Product Description</h3>
            <p>{{$item->product_description}}</p>
            <h3>Product Details</h3>
            <p>{{$item->product_price}}</p>
            
            <ul>
            
                <li>4 GB DDR3L SDRAM (1 x 4 GB)</li>
                <li>Intel HD Graphics 4400</li>
                <li>1 TB 5400 rpm SATA</li>
                <li>asidisl</li>
            </ul>
        </div>

        <div class="col-lg-3">
            <div class="form-group input-group">
                <span class="input-group-addon"><i class="fa fa-rupee"></i></span>
                <input type="text" class="form-control" placeholder="Bidding starts from" disabled>
            </div>
            <button type="submit" class="btn btn-warning">Bid for Product</button>

        </div>

    </div>
    <!-- /.row -->

    <!-- Related Projects Row -->
    <div class="row">

        <div class="col-lg-12">
            <h3 class="page-header">Related Products</h3>
        </div>

        <div class="col-sm-3 col-xs-6">
            <a href="#">
                <img class="img-responsive portfolio-item" src="img/cabin.png" alt="pro_1">
            </a>
        </div>

        <div class="col-sm-3 col-xs-6">
            <a href="#">
                <img class="img-responsive portfolio-item" src="img/submarine.png" alt="pro_2">
            </a>
        </div>

        <div class="col-sm-3 col-xs-6">
            <a href="#">
                <img class="img-responsive portfolio-item" src="img/circus.png" alt="pro_3">
            </a>
        </div>

        <div class="col-sm-3 col-xs-6">
            <a href="#">
                <img class="img-responsive portfolio-item" src="img/game.png" alt="pro_4">
            </a>
        </div>

    </div>
    <!-- /.row -->

    <hr>


    <!--Footer Section-->
    <footer id="myFooter">
        <div class="container">
            <ul>
                <li><a href="#">Company Information</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">Terms of Service</a></li>
            </ul>
            <p class="footer-copyright">© 2017 Copyright of Ra1</p>
        </div>
        <div class="footer-social">
            <a href="#" class="social-icons"><i class="fa fa-envelope"></i></a>
        </div>
    </footer>
</div>
  
  </div>
</div>

@endsection