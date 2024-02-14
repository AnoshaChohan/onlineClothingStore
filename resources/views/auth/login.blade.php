<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tech2etc Ecommerce Tutorial</title>
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />

        <link href="{{ asset('css/styles.css') }}" rel="stylesheet">   
    </head>

<div id="header">
    <a href="#"><img src="images/logo.png" class="logo" alt=""></a>
    <div>
        <ul id="navbar">
            <li><a href="{{ url('/') }}">HOME</a></li>
            <li><a href="{{ url('/shop') }}">SHOP</a></li>
            <li><a href="{{ url('/blog') }}">BLOG</a></li>
            <li><a href="{{ url('/about') }}">ABOUT</a></li>
            <li><a href="{{ url('/contactUs') }}">CONTACT</a></li>
            <li id="lg-bag"><a href="{{ url('/cart') }}"><i class="far fa-shopping-bag"></i></a></li>
            <li id="lg-profile" class="profile-icon">
                <a href="#"><i class="fa-solid fa-user"></i></a>
                <div class="tooltip">
                    <a href="{{ url('login') }}">Sign In / Register</a>
                    <a href="{{ url('my-orders') }}">My Orders</a>
                </div>
            </li>
        </ul>
    </div>

        <div id="mobile">
            <a href="cart"><i class="far fa-shopping-bag"></i></a>
            <i id="bar" class="fas fa-outdent"></i>
        </div>
</div> 


<div class="container">
   
        <div class="loginForm">

                        <h3>Sign In/Register</h3>

                        <form method="POST" action="{{ route('login') }}" >
                                @csrf

                                    <label for="email" >{{ __('Email address:') }}</label>
                                
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                
                                        <br>
                                        <button type="button" onclick="openForm(event)"> <!-- Button element with onclick attribute -->
                Continue
            </button>
            </a>
                                        <p>By continuing, you agree to our Privacy & Cookie Policy and Terms & Conditions.</p>
                    </form>
        </div>
</div>

  <!-- Include login form popup -->
  @include('loginForm')


<footer class="section-p1">
    <div class="col">
        <img class="logo" src="images/logo.png" alt"">
        <h4>Contact</h4>
        <p><strong>Phone: </strong>+01 222 365</p>
        <p><strong>Address: </strong>562 Weliington Road, Street 33, California</p>
        <div class="follow">
            <div class="icon">
                <i class="fab fa-facebook-f" ></i>
                <i class="fab fa-twitter" ></i>
                <i class="fab fa-instagram" ></i>
                <i class="fab fa-pinterest" ></i>
                <i class="fab fa-youtube" ></i>

            </div>
        </div>

    <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
    </div>

    <div class="col">
        <h4>About</h4>
        <a href="#">About us</a>
        <a href="#">Delivery Informtaion</a>
        <a href="#">Privacy Policy</a>
        <a href="#">Terms & Conditions</a>
        <a href="#">Contact us</a>
    </div>

    <div class="col">
        <h4>My Account</h4>
        <a href="#">Sign In</a>
        <a href="#">View Cart</a>
        <a href="#">My Wishlist</a>
        <a href="#">Track My Order</a>
        <a href="#">Help</a>

    </div>

    <div class="col install">
        <h4>Install Apps</h4>
        <p>From app store or google play</p>
        <div class="row">
            <img src="images/pay/app.jpg" alt="">
            <img src="images/pay/play.jpg" alt="">
        </div>
        <p>Secured Payment Gateways</p>
        <img src="images/pay/pay.png" alt="">

    </div>

    <div class="copyright">
        <p>@ 2021, Tech2 - HTML CSS Ecommerce Template</p>
    </div>
    


</footer>

<script>
    function openForm(event) {

    event.preventDefault(); // Prevent the default behavior of the anchor tag
    
    document.getElementById("blur-background").style.display = "block";
    document.getElementById("myForm").style.display = "block";
}


function closeForm() {
    document.getElementById("blur-background").style.display = "none";
    document.getElementById("myForm").style.display = "none";
}

</script>


<!-- <div class="blur-background"></div>

    <div class="form-popup" id="myForm" style="display: none;">
        <span class="close-icon" onclick="closeForm()">×</span>

        <form method="POST" action="{{ route('login') }}" class="form-container">
        @csrf

            <h3>Sign in with your account</h3>
            <div class="labelForm">
                <label for="email">Email Address</label>
                <input type="text" id="popup-email" placeholder="Enter Email" name="email" required>

                <label for="psw">Password</label>
                <input type="password" placeholder="Enter Password: " name="psw" required>

                <button type="button" class="open-button" onclick="openForm()">Continue</button>.o-
            </div>
        </form>
    </div>


        <div class="form-popup" id="registerForm" style="display: none;">
            <span class="close-icon" onclick="closeForm()">×</span>
        
            <form method="POST" action="{{ route('register') }}" class="form-container">
                @csrf
                <h1>Register</h1>

                <label for="name"><b>Name</b></label>
                <input type="text" placeholder="Enter Name" name="name" required>

                <label for="email"><b>Email</b></label>
                <input type="text" placeholder="Enter Email" name="email" required>

                <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
</div> -->