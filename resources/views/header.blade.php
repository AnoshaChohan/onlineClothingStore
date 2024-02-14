<!DOCTYPE html>
<html>
<head>
    <title>Your Page Title</title>
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">    <!-- Assuming your CSS file is in public/css/style.css -->
</head>
<body>

<header class="header">
    <div class="logo">
        <img src="{{ asset('images/your_logo_image.png') }}" alt="Logo">
        <!-- Replace 'your_logo_image.png' with your actual logo file name -->
    </div>
    <div class="search-bar">
        <form action="{{ route('home') }}" method="GET"> <!-- Replace 'route('search')' with your actual search route -->
            <input type="text" placeholder="Search..." name="query">
            <button type="submit">Search</button>
        </form>
    </div>
    <nav>
        <ul class="navigation">
            <li><a href="{{ route('home') }}">Home</a></li> <!-- Replace 'route('home')' with your actual home route -->
            <li><a href="{{ route('home') }}">About</a></li> <!-- Replace 'route('about')' with your actual about route -->
            <li><a href="{{ route('home') }}">Shop</a></li> <!-- Replace 'route('shop')' with your actual shop route -->
            <li><a href="{{ route('home') }}">Help</a></li> <!-- Replace 'route('help')' with your actual help route -->
        </ul>
    </nav>
    <div class="cart">
        <a href="{{ route('home') }}">Your Cart</a> <!-- Replace 'route('cart')' with your actual cart route -->
    </div>
</header>

<!-- Rest of your HTML content -->

</body>
</html>
