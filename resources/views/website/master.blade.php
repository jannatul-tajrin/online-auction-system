<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="{{url('frontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url('font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">

    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- Bootstrap Core JavaScript -->
    <script src="{{url('frontend/js/bootstrap.min.js')}}"></script>

    <style rel="stylesheet">
        .thumbnail img {
            height:250px;
            width:100%;
        }
        /* body {
            background-image: url("frontend/images/Bid product.jpg");
            background-repeat: no-repeat;
            background-size: cover;
        
        } */

    </style>

    <!-- Script for scroll to top button -->
    <script type='text/javascript'>
        $(document).ready(function(){
            $(window).scroll(function () {
                if ($(this).scrollTop() > 50) {
                    $('#back-to-top').fadeIn();
                } else {
                    $('#back-to-top').fadeOut();
                }
            });
            // scroll body to 0px on click
            $('#back-to-top').click(function () {
                $('#back-to-top').tooltip("hide");
                $('body,html').animate({
                    scrollTop: 0
                }, 800);
                return false;
            });

            $('#back-to-top').tooltip("show");
        });
    </script>

    <link href="{{url('frontend/my_css/index.css')}}" rel="stylesheet">
    <link href="{{url('frontend/my_css/footer.css')}}" rel="stylesheet">
    <title>ONLINE AUCTION SYSTEM</title>

</head>
<body>

<!--Navigation-->
<div class="navbar navbar-custom navbar-fixed-top navbar affix">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span><i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="index.html">ONLINE AUCTION SYSTEM</a>
        </div>
        <div class="navbar-collapse collapse navbar-right">
            <ul class="nav navbar-nav">
                <li><a href="{{route('frontend.home')}}">Home</a>
                </li>

                
                <li><a href="{{route('frontend.profile')}}">Profile</a>
                </li>
              
                <li><a href="{{route('frontend.review')}}">Review</a>
                </li>
    
               <!-- <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Auction<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        
                        <li><a href="Auction.html">Auction Result</a></li>
                         </li>
                         </ul>-->


                         
                         

              <!--  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Categories <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="category_1_1.html">Books</a></li>
                        <li><a href="category_2_1.html">Automobiles</a></li>
                        <li><a href="category_3_1.html">Mobiles</a></li>
                        <li><a href="category_4_1.html">Fitness</a></li>
                        <li><a href="category_5_1.html">Fashion</a></li>
                    </ul>
                </li>-->
                @if(auth()->user())
                <li><a href="{{route('user.logout')}}">Log Out</a>
                @else

                <li><a href="{{route('login.user')}}">Login</a>
                </li>
                <li><a href="{{route('registration')}}">Registration</a>
                </li>
                @endif
                
            </ul>
        </div>
        <!--/.nav-collapse -->
    </div>
</div>

<!--Carousel for products-->
@include('website.layout.header')

<!-- Products Section -->
@yield('content')

<!--Footer Section-->

@include('website.layout.footer')
</body>
</html>