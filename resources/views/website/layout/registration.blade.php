
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{url('/frontend/reg/fonts/material-icon/css/material-design-iconi')}}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{url('/frontend/reg/css/style.css')}}">
</head>
<body>

    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Registration</h2>
                        <form action="{{route('registration.store')}}" method="POST" class="register-form" id="register-form">
                            @csrf
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Your Name"/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email"/>
                            </div>
                            <div class="form-group">
                                <label for="address"><i class="zmdi zmdi-address"></i></label>
                                <input type="string" name="address" id="address" placeholder="Address"/>
                            </div>
                            <div class="form-group">
                                <label for="password"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="password" placeholder="Password"/>
                            </div>
                              <div class="form-group">
                                <label for="Phone"><i class="zmdi zmdi-phone"></i></label>
                                <input type="string" name="phone" id="phone" placeholder="Phone"/>
                            </div>
                                
                            
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="{{url('frontend/reg/images/signup-image.jpg')}}" alt="sing up image"></figure>
                        <a href="#" class="signup-image-link">I am already member</a>
                    </div>
                </div>
            </div>
        </section>

        

    <!-- JS -->
    <script src="{{url('/frontend/reg/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{url('/frontend/reg/js/main.js')}}"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>

