<!DOCTYPE html>
<html>
<head>
    <title>Your Page Title</title>
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">    <!-- Assuming your CSS file is in public/css/style.css -->
</head>
<body>

<header class="header2">
    <div class="Header2">
    <div class="loginButton">
       <a href="{{route('login')}}">Login</a>
    </div>
    
    <nav>
        <ul class="navigation2">
            <li><a href="{{ route('women') }}">WOMEN</a></li>
            <li><a href="{{ route('kid') }}">KIDS</a></li> <!-- Replace 'route('about')' with your actual about route -->
            <li><a href="{{ route('men') }}">MEN</a></li> <!-- Replace 'route('shop')' with your actual shop route -->
            <li><a href="{{ route('sale') }}">SALE</a></li> <!-- Replace 'route('help')' with your actual help route -->
            
        </ul>
   
    </nav>
   
    <div class="checkout">
        <a href="{{ route('home') }}">CHECKOUT</a>
</div>
</div class="Header2">
</header2>

</body>
</html>
