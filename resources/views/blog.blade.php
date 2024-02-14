

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
                <li><a class="active" href="{{ url('/blog') }}">BLOG</a></li>
                <li><a href="{{ url('/about') }}">ABOUT</a></li>
                <li><a href="{{ url('/contactUs') }}">CONTACT</a></li>
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

<section id="page-header" class="blog-header">
    <h2>#readmore</h2>
    <p> Read all about our products</p>

</section>

<section id="blog" >
    <div class="blog-box">
        <div class="blog-img">
            <img src="images/blog/b1.jpg">
        </div>
        <div class="blog-details">
            <h4>The cotton-jersey zip-up hoodie </h4>
            <p>A dress (also known as a frock or a gown) is a 
            garment traditionally worn by women or girls consisting
             of a skirt with an attached bodice (or a matching bodice 
             giving the effect of a one-piece garment).</p>
             <a href="#"> CONTINUE READING</a>
        </div>
         <h1> 13/01</h1>
    </div>

    <div class="blog-box">
        <div class="blog-img">
            <img src="images/blog/b2.jpg">
        </div>
        <div class="blog-details">
            <h4>The cotton-jersey zip-up hoodie </h4>
            <p>A dress (also known as a frock or a gown) is a 
            garment traditionally worn by women or girls consisting
             of a skirt with an attached bodice (or a matching bodice 
             giving the effect of a one-piece garment).</p>
             <a href="#"> CONTINUE READING</a>
        </div>
         <h1> 13/01</h1>
    </div>

<div class="blog-box">
        <div class="blog-img">
            <img src="images/blog/b3.jpg">
        </div>
        <div class="blog-details">
            <h4>The cotton-jersey zip-up hoodie </h4>
            <p>A dress (also known as a frock or a gown) is a 
            garment traditionally worn by women or girls consisting
             of a skirt with an attached bodice (or a matching bodice 
             giving the effect of a one-piece garment).</p>
             <a href="#"> CONTINUE READING</a>
        </div>
         <h1> 13/01</h1>
        </div>

        <div class="blog-box">
        <div class="blog-img">
            <img src="images/blog/b4.jpg">
        </div>
        <div class="blog-details">
            <h4>The cotton-jersey zip-up hoodie </h4>
            <p>A dress (also known as a frock or a gown) is a 
            garment traditionally worn by women or girls consisting
             of a skirt with an attached bodice (or a matching bodice 
             giving the effect of a one-piece garment).</p>
             <a href="#"> CONTINUE READING</a>
        </div>
         <h1> 13/01</h1>
        </div>
</section>   


<section id="pagination" class="section-p1">
    <a href= "#">1</a>
    <a href= "#">2</a>
    <a href= "#"><i class="fal fa-long-arrow-alt-right"></i></a>



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
