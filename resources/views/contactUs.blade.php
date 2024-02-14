<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tech2etc Ecommerce Tutorial</title>
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />

        <link href="{{ asset('css/styles.css') }}" rel="stylesheet">    <!-- Assuming your CSS file is in public/css/style.css -->
    </head>
<body>
    <section id="header">
        <a href="#"><img src="images/logo.png" class="logo" alt=""></a>
        <div>
        <ul id="navbar">
                <li><a  href="{{ url('/') }}">HOME</a></li>
                <li><a href="{{ url('/shop') }}">SHOP</a></li>
                <li><a href="{{ url('/blog') }}">BLOG</a></li>
                <li><a href="{{ url('/about') }}">ABOUT</a></li>
                <li><a class="active" href="{{ url('/contactUs') }}">CONTACT</a></li>
                <li id="lg-bag"><a href="{{ url('/cart') }}"><i class="far fa-shopping-bag"></i></a></li>
                <li id="lg-profile"><a href="{{ url('/profile') }}"><i class="fa-solid fa-user"></i></a></li>                
                <a href="#" id="close"><i class="far fa-times"></i></a>
            </ul>
        </div>
        <div id="mobile">
            <a href="cart.html"><i class="far fa-shopping-bag"></i></a>
            <i id="bar" class="fas fa-outdent"></i>

        </div>
</section>

<section id="page-header" class="about-header">
    <h2>#let's_talk</h2>
    <p>LEAVE A MESSAGE. We love to hear from you!</p>
</section>

<section id="contact-details" class="section-p1">
<div class="details">
    <span>GET IN TOUCH</span>
    <h2> Visit one of our agency locations or contact us today</h2>
    <h3> Head Office</h3>
    <div>
        <li>
            <i class="fal fa-map"></i>
            <p>56 Glassford Street, New York </p>
        </li>
        <li>
            <i class="fal fa-envelope"></i>
            <p>contact@example.com </p>
        </li>
        <li>
            <i class="fal fa-phone-alt"></i>
            <p>contact@example.com </p>
        </li>
        <li>
            <i class="fal fa-map"></i>
            <p>Monday to Saturdey: 9.00am to 16.pm </p>
        </li>
    </div>       
</div>
<div class="map">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14480.486896506238!2d67.0168846!3d24.859691899999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33e11fe1ecd8d%3A0xfa7e1e717f5e6192!2sOxford%20University%20Press!5e0!3m2!1sen!2s!4v1704386130537!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>


</div>
</section>

<section id="form-details">
    <form action="">
        <span>LEAVE A MESSAGE</span>
        <h2>We Love to hear from you</h2>
        <input type="text" placeholder="Your Name">
        <input type="text" placeholder="E-mail">
        <input type="text" placeholder="Subject">
        <textarea name="" id="" cols="30" rows="10" placeholder="Your Message"></textarea>
        <button class="normal">Submit</button>
    </form>
        <div class="people">
            <div>
                <img src="images/people/1.png" alt="">
                <p><span>John Doe</span>Senior ,Marketing Manager<br>Phone: 111 111 888 <br> Email: contacct@example.com</p>
            </div>
            <div>
                <img src="images/people/2.png" alt="">
                <p><span>John Doe</span>Senior ,Marketing Manager<br>Phone: 111 111 888 <br> Email: contacct@example.com</p>
            </div>
            <div>
                <img src="images/people/3.png" alt="">
                <p><span>John Doe</span>Senior ,Marketing Manager<br>Phone: 111 111 888 <br> Email: contacct@example.com</p>
            </div>
        </div>

</section>

<div id="newsletter" class="section-p1 section-m1">
    <div class="newstext">
        <h4>Sign Up For Newsletters</h4>
        <p>Get E-mail updates about our latest shop and <span>special offers.</span></p>
    </div>
    <div class="form">
        <input type="text" placeholder="Your email address">
        <button class="normal"> Sign Up</button>
    
    </div>
</div>

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

<link href="{{ asset('components/sxript.js') }}" rel="stylesheet">    <!-- Assuming your CSS file is in public/css/style.css -->


</body>
</html>