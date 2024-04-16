<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tech2etc Ecommerce Tutorial</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet"> <!-- Assuming your CSS file is in public/css/style.css -->
</head>
<body>
<style>
        /* Dropdown button */
.dropbtn {
    font-size: 16px;
    border: none;
    outline: none;
    color: black;
    padding: 12px 16px;
    background-color: inherit;
    font-family: inherit;
    margin: 0;
}

/* Dropdown content (hidden by default) */
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

/* Show the dropdown content on hover */
.dropdown:hover .dropdown-content {
    display: block;
}

/* Style the dropdown links */
.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {
    background-color: #f1f1f1;
}

/* Add a grey background color to dropdown links on hover */
.dropdown-content a:hover {
    background-color: #ddd;
}

/* Style for username */
.username {
    margin-right: 5px;
}

</style>
<div id="header">
    <a href="#"><img src="images/logo.png" class="logo" alt=""></a>
    <div>
        <ul id="navbar">
            <li><a class="{{ Request::is('/') ? 'active' : '' }}" href="{{ url('/') }}">HOME</a></li>
            <!-- <li class="dropdown">
                <a href="#" class="shop-icon">SHOP</a>
                <div class="dropdown-content">
                    <a href="{{ url('/men') }}">Men</a>
                    <span class="vertical-line"></span>
                    <a href="{{ url('/women') }}">Women</a>
                    <span class="vertical-line"></span>
                    <a href="{{ url('/kid') }}">Kids</a>
                </div>
            </li>      -->
            <li><a class="{{ Request::is('shop') ? 'active' : '' }}" href="{{ url('/shop') }}">SHOP</a></li>
            
            <li><a class="{{ Request::is('blog') ? 'active' : '' }}" href="{{ url('/blog') }}">BLOG</a></li>
            <li><a class="{{ Request::is('about') ? 'active' : '' }}" href="{{ url('/about') }}">ABOUT</a></li>
            <li><a class="{{ Request::is('contactUs') ? 'active' : '' }}" href="{{ url('/contactUs') }}">CONTACT</a></li>
            <li id="lg-bag"><a href="{{ url('/cart') }}"><i class="far fa-shopping-bag"></i></a></li>
            
            <li id="lg-profile" class="dropdown">
    <a href="#" class="dropbtn">
        <i class="fa-solid fa-user"></i>
       
    </a>
    <div class="dropdown-content">
        @if (Auth::guard('user')->check())
            <a href="{{ url('/profile') }}">{{ Auth::guard('user')->user()->name }}</a>

            <a href="{{ route('logout') }}">Logout</a>
        @else
            <a href="{{ route('login') }}">Login</a>
        @endif
    </div>
</li>



</li>

           
           
            <a href="#" id="close"><i class="far fa-times"></i></a>
        </ul>
    </div>
    <div id="mobile">
        <a href="cart"><i class="far fa-shopping-bag"></i></a>
        <i id="bar" class="fas fa-outdent"></i>
    </div>
</div>
