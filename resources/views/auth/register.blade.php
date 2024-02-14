@extends('layouts.app')


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

<div class="container" id="register1">
<div class="row justify-content-center"> <!-- Center the form horizontally -->
        <div class="col-md-10"> <!-- Set the width of the form to 6 columns for medium devices and above -->
    <div class="loginForm">
    <div class="text-center mb-3 ms-md-5" id="registerTag"> <!-- Increased margin to move the h3 tag further to the right -->
                    <h3>Register</h3>
                </div>
                <br>
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="row mb-3">
                <div class="col-md-4 text-md-start">
                    <label for="name">{{ __('Name') }}</label>
                </div>
                <br>

                <div class="col-md-6">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <br>

            <div class="row mb-3">
                <div class="col-md-4 text-md-start">
                    <label for="email">{{ __('Email Address') }}</label>
                </div>
                <div class="col-md-6">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <br>


            <div class="row mb-3">
                <div class="col-md-4 text-md-start">
                    <label for="password">{{ __('Password') }}</label>
                </div>
                <div class="col-md-6">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <br>

            <div class="row mb-3">
                <div class="col-md-4 text-md-start">
                    <label for="password-confirm">{{ __('Confirm Password') }}</label>
                </div>
                <div class="col-md-6">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>
            </div>
            <br>


            <div class="row mb-0">
            <div class="col-md-12"> <!-- Remove text-center class here -->
            <button type="submit" class="btn btn-primary" >

                        {{ __('Register') }}
                    </button>
                </div>
            </div>
        </form>
        </div>
    </div>

    </div>
</div>

