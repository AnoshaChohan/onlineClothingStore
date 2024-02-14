

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tech2etc Ecommerce Tutorial</title>
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />

        <link href="{{ asset('css/styles.css') }}" rel="stylesheet">    <!-- Assuming your CSS file is in public/css/style.css -->
    </head>
<body>
<div id="header">
        <a href="#"><img src="images/logo.png" class="logo" alt=""></a>
        <div>
            <ul id="navbar">
                <li><a class="active" href="{{ url('/') }}">HOME</a></li>
                <li><a href="{{ url('/shop') }}">SHOP</a></li>
                <li><a href="{{ url('/blog') }}">BLOG</a></li>
                <li><a href="{{ url('/about') }}">ABOUT</a></li>
                <li><a href="{{ url('/contactUs') }}">CONTACT</a></li>
                <li id="lg-bag"><a href="{{ url('/cart') }}"><i class="far fa-shopping-bag"></i></a></li>
                <li id="lg-profile"><a href="{{ url('/profile') }}"><i class="fa-solid fa-user"></i></a></li>                
                <a href="#" id="close"><i class="far fa-times"></i></a>
            </ul>
        </div>
        <div id="mobile">
            <a href="cart"><i class="far fa-shopping-bag"></i></a>
            <i id="bar" class="fas fa-outdent"></i>

        </div>
    </div>

    <div id ="hero">
    <h4>Trande-in-offers</h4>
    <h2>Super value deals</h2>
    <h1>On all products</h1>
    <p>Save more with coupons</p>
    <button onclick="window.location.href='{{ route('shop') }}'">Shop Now</button>
</div>

    <div id="feature" class="section-p1" >
        <div class="fe-box">
        <img src="images/features/f1.png" alt="">
        <h6>Free Shipping</h6>
        </div>

        <div class="fe-box">
            <img src="images/features/f2.png" alt="">
            <h6>Online Order</h6>
            </div>



        <div class="fe-box">
                    <img src="images/features/f4.png" alt="">
                    <h6>Promotions</h6>
                    </div>

        <div class="fe-box">
                    <img src="images/features/f5.png" alt="">
                    <h6>Happy sell</h6>
                        </div>

        <div class="fe-box">
                            <img src="images/features/f6.png" alt="">
                            <h6>Support</h6>
                            </div>


    </div>

    <div id="product1" class="section-p1">
        <h2> Featured Prdodcuts</h2>
        <p> Summer collection New Morgan Design</p>
        <div class="pro-container">
             <div class="pro">
                <img src="images/products/f1.jpg" alt ="">
                <div class="des">
                    <span> adidas</span>
                    <h5> Cartoon Astranaut T-shorts</h5>
                        <div class="star">
                            <i class=""fas fa-star"></i>
                            <i class=""fas fa-star"></i>
                            <i class=""fas fa-star"></i>
                            <i class=""fas fa-star"></i>
                            <i class=""fas fa-star"></i>
                            </div>
                            <h4>$500</h4>
                            </div>
            <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
    </div>

    <div class="pro">
        <img src="images/products/f2.jpg" alt ="">
        <div class="des">
            <span> adidas</span>
            <h5> Cartoon Astranaut T-shorts</h5>
                <div class="star">
                    <i class=""fas fa-star"></i>
                    <i class=""fas fa-star"></i>
                    <i class=""fas fa-star"></i>
                    <i class=""fas fa-star"></i>
                    <i class=""fas fa-star"></i>
                    </div>
                    <h4>$500</h4>
                    </div>
    <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
</div>

<div class="pro">
    <img src="images/products/f3.jpg" alt ="">
    <div class="des">
        <span> adidas</span>
        <h5> Cartoon Astranaut T-shorts</h5>
            <div class="star">
                <i class=""fas fa-star"></i>
                <i class=""fas fa-star"></i>
                <i class=""fas fa-star"></i>
                <i class=""fas fa-star"></i>
                <i class=""fas fa-star"></i>
                </div>
                <h4>$500</h4>
                </div>
<a href="#"><i class="fal fa-shopping-cart cart"></i></a>
</div>

<div class="pro">
    <img src="images/products/f4.jpg" alt ="">
    <div class="des">
        <span> adidas</span>
        <h5> Cartoon Astranaut T-shorts</h5>
            <div class="star">
                <i class=""fas fa-star"></i>
                <i class=""fas fa-star"></i>
                <i class=""fas fa-star"></i>
                <i class=""fas fa-star"></i>
                <i class=""fas fa-star"></i>
                </div>
                <h4>$500</h4>
                </div>
<a href="#"><i class="fal fa-shopping-cart cart"></i></a>
</div>

<div class="pro">
    <img src="images/products/f5.jpg" alt ="">
    <div class="des">
        <span> adidas</span>
        <h5> Cartoon Astranaut T-shorts</h5>
            <div class="star">
                <i class=""fas fa-star"></i>
                <i class=""fas fa-star"></i>
                <i class=""fas fa-star"></i>
                <i class=""fas fa-star"></i>
                <i class=""fas fa-star"></i>
                </div>
                <h4>$500</h4>
                </div>
<a href="#"><i class="fal fa-shopping-cart cart"></i></a>
</div>

<div class="pro">
    <img src="images/products/f6.jpg" alt ="">
    <div class="des">
        <span> adidas</span>
        <h5> Cartoon Astranaut T-shorts</h5>
            <div class="star">
                <i class=""fas fa-star"></i>
                <i class=""fas fa-star"></i>
                <i class=""fas fa-star"></i>
                <i class=""fas fa-star"></i>
                <i class=""fas fa-star"></i>
                </div>
                <h4>$500</h4>
                </div>
<a href="#"><i class="fal fa-shopping-cart cart"></i></a>
</div>

<div class="pro">
    <img src="images/products/f7.jpg" alt ="">
    <div class="des">
        <span> adidas</span>
        <h5> Cartoon Astranaut T-shorts</h5>
            <div class="star">
                <i class=""fas fa-star"></i>
                <i class=""fas fa-star"></i>
                <i class=""fas fa-star"></i>
                <i class=""fas fa-star"></i>
                <i class=""fas fa-star"></i>
                </div>
                <h4>$500</h4>
                </div>
<a href="#"><i class="fal fa-shopping-cart cart"></i></a>
</div>

<div class="pro">
    <img src="images/products/f8.jpg" alt ="">
    <div class="des">
        <span> adidas</span>
        <h5> Cartoon Astranaut T-shorts</h5>
            <div class="star">
                <i class=""fas fa-star"></i>
                <i class=""fas fa-star"></i>
                <i class=""fas fa-star"></i>
                <i class=""fas fa-star"></i>
                <i class=""fas fa-star"></i>
                </div>
                <h4>$500</h4>
                </div>
<a href="#"><i class="fal fa-shopping-cart cart"></i></a>
</div>
</div>

</div>

<div id="banner" class=".section-m1">
    <h4>Repair Services</h4>
    <h2>UP to <span>70% off </span> All T-Shirts & Accessories</h2>
    <button class="normal" onclick="window.location.href='{{ route('shop') }}'">Explore More</button>

</div>

<div id="product1" class="section-p1">
        <h2> New Arrivals</h2>
        <p> Summer collection New Morgan Design</p>
    <div class="pro-container">
                <div class="pro">
                    <img src="images/products/n1.jpg" alt ="">
                    <div class="des">
                        <span> adidas</span>
                        <h5> Cartoon Astranaut T-shorts</h5>
                            <div class="star">
                                <i class=""fas fa-star"></i>
                                <i class=""fas fa-star"></i>
                                <i class=""fas fa-star"></i>
                                <i class=""fas fa-star"></i>
                                <i class=""fas fa-star"></i>
                            </div>
                                <h4>$500</h4>
                    </div>
                    <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                </div>

        <div class="pro">
            <img src="images/products/n2.jpg" alt ="">
            <div class="des">
                <span> adidas</span>
                <h5> Cartoon Astranaut T-shorts</h5>
                    <div class="star">
                        <i class=""fas fa-star"></i>
                        <i class=""fas fa-star"></i>
                        <i class=""fas fa-star"></i>
                        <i class=""fas fa-star"></i>
                        <i class=""fas fa-star"></i>
                        </div>
                        <h4>$500</h4>
                        </div>
        <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
        </div>

        <div class="pro">
        <img src="images/products/n3.jpg" alt ="">
        <div class="des">
            <span> adidas</span>
            <h5> Cartoon Astranaut T-shorts</h5>
                <div class="star">
                    <i class=""fas fa-star"></i>
                    <i class=""fas fa-star"></i>
                    <i class=""fas fa-star"></i>
                    <i class=""fas fa-star"></i>
                    <i class=""fas fa-star"></i>
                    </div>
                    <h4>$500</h4>
                    </div>
        <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
        </div>

        <div class="pro">
        <img src="images/products/n4.jpg" alt ="">
        <div class="des">
            <span> adidas</span>
            <h5> Cartoon Astranaut T-shorts</h5>
                <div class="star">
                    <i class=""fas fa-star"></i>
                    <i class=""fas fa-star"></i>
                    <i class=""fas fa-star"></i>
                    <i class=""fas fa-star"></i>
                    <i class=""fas fa-star"></i>
                    </div>
                    <h4>$500</h4>
                    </div>
        <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
        </div>

        <div class="pro">
        <img src="images/products/n5.jpg" alt ="">
        <div class="des">
            <span> adidas</span>
            <h5> Cartoon Astranaut T-shorts</h5>
                <div class="star">
                    <i class=""fas fa-star"></i>
                    <i class=""fas fa-star"></i>
                    <i class=""fas fa-star"></i>
                    <i class=""fas fa-star"></i>
                    <i class=""fas fa-star"></i>
                    </div>
                    <h4>$500</h4>
                    </div>
        <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
        </div>

        <div class="pro">
        <img src="images/products/n6.jpg" alt ="">
        <div class="des">
            <span> adidas</span>
            <h5> Cartoon Astranaut T-shorts</h5>
                <div class="star">
                    <i class=""fas fa-star"></i>
                    <i class=""fas fa-star"></i>
                    <i class=""fas fa-star"></i>
                    <i class=""fas fa-star"></i>
                    <i class=""fas fa-star"></i>
                    </div>
                    <h4>$500</h4>
                    </div>
        <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
        </div>

        <div class="pro">
        <img src="images/products/n7.jpg" alt ="">
        <div class="des">
            <span> adidas</span>
            <h5> Cartoon Astranaut T-shorts</h5>
                <div class="star">
                    <i class=""fas fa-star"></i>
                    <i class=""fas fa-star"></i>
                    <i class=""fas fa-star"></i>
                    <i class=""fas fa-star"></i>
                    <i class=""fas fa-star"></i>
                    </div>
                    <h4>$500</h4>
                    </div>
        <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
        </div>

        <div class="pro">
                <img src="images/products/n8.jpg" alt ="">
                <div class="des">
                    <span> adidas</span>
                    <h5> Cartoon Astranaut T-shorts</h5>
                        <div class="star">
                            <i class=""fas fa-star"></i>
                            <i class=""fas fa-star"></i>
                            <i class=""fas fa-star"></i>
                            <i class=""fas fa-star"></i>
                            <i class=""fas fa-star"></i>
                        </div>
                            <h4>$500</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
        </div>
    </div>

</div>

        <div id="sm-banner" class="section-p1">
            <div class="banner-box">
                <h4>crazy deals</h4>
                <h2>buy 1 get 1 free </h2>
                <span> The best classic dress is on the sale at cara</span>
                <button class="white" >Learn More</button>
            </div>
            <div class="banner-box banner-box2">
                <h4>spring/summer</h4>
                <h2>Upcoming season </h2>
                <span> The best classic dress is on the sale at cara</span>
                <button class="white" onclick="window.location.href='{{ route('shop') }}'">Collection</button>

            </div>

        </div>

<div id="banner3">
    <div class="banner-box">
        <h2>SEASONAL SALE </h2>
        <h3> Winter collection -50% OFF</h3>
    </div>

    <div class="banner-box banner-box2">
        <h2>NEW FOOTWEAR COLLECTION</h2>
        <h3> Spring/Summer 2022</h3>
    </div>

    <div class="banner-box banner-box3">
        <h2>T-SHIRTS </h2>
        <h3> New Trendy Pants</h3>
    </div>
</div>

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

<link href="{{ asset('components/script.js') }}" rel="stylesheet">    <!-- Assuming your CSS file is in public/css/style.css -->


</body>
