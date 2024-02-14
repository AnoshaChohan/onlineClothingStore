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
            <a href="cart.html"><i class="far fa-shopping-bag"></i></a>
            <i id="bar" class="fas fa-outdent"></i>

        </div>
    </div>
    
  <section id="prodetails" class="section-p1">
        <div class="single-pro-image">
            <img src="images/products/f1.jpg" width="100%" id="MainImg" alt="">
        
        
            <div class="small-img-group">
                <div class="small-img-col">
                    <img src="images/products/f1.jpg" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="images/products/f2.jpg" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="images/products/f3.jpg" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="images/products/f4.jpg" width="100%" class="small-img" alt="">
                </div>
            </div>
        </div>

        <div class="single-pro-details">
        <h6> Home / T-Shirts </h6>
        <h4> Men's Fashion T Shirt </h4>
        <h2> $139.00 </h2>
        <select>
        <option>Select Size </option>
        <option>XL </option>
        <option>XXL</option>
        <option>Small</option>
        <option>Large</option>

        </select>
        <input type="number" value="1">
        <button class="normal"> Add To Cart </button>
        <h4>Product Details </h4>
        <span>A dress (also known as a frock or a gown) is a 
            garment traditionally worn by women or girls consisting
             of a skirt with an attached bodice (or a matching bodice 
             giving the effect of a one-piece garment).</span>
        </div>


        </div>
</section>

<section id="product1" class="section-p1">
        <h2> Featured Images</h2>
        <p> Summer collection New Morgan Design</p>
    <div class="pro-container">
                <div class="pro">
                    <img src="images/products/n1.jpg" alt ="">
                    <div class="des">
                        <span> adidas</span>
                        <h5> Cartoon Astranaut T-shorts</h5>
                            <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>

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
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>

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
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>

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
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>

                    <i class="fas fa-star"></i>
                    </div>
                    <h4>$500</h4>
                    </div>
        <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
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

<script>
        var MainImg = document.getElementById("MainImg");
        var smallimg = document.getElementsByClassName("small-img");

        smallimg[0].onclick = function(){
            MainImg.src = smallimg[0].src;
        }
        smallimg[1].onclick = function(){
            MainImg.src = smallimg[1].src;
        }
        smallimg[2].onclick = function(){
            MainImg.src = smallimg[2].src;
        }
        smallimg[3].onclick = function(){
            MainImg.src = smallimg[3].src;
        }

    </script>
<!-- <link href="{{ asset('components/sxript.js') }}" rel="stylesheet">    Assuming your CSS file is in public/css/style.css -->


</body>
</html>