

@include('header')

<div id ="hero1">

    <h2>#stayhome</h2>
    <p>Spotlight on utility</p>
</div>

   
<section id="product1" class="section-p1">
    <div class="pro-container">
        @foreach($products as $product)
            <div class="pro">
                <a href="/sproductView/{{ $product->id }}" class="quick-view-link">
                        <img src="{{ asset('images/products/kid' . $product->id . '.jpg') }}" alt="{{ $product->name }}">
                </a>
                <div class="des">
                    <span>{{ $product->brand }}</span>
                    <h5>{{ $product->name }}</h5>
                    <div class="star">
                        @for ($i = 0; $i < $product->rating; $i++)
                            <i class="fas fa-star"></i>
                        @endfor
                    </div>
                    <h4>${{ $product->price }}</h4>
                    
                    <a href="/sproductView/{{ $product->id }}" class="quick-view-btn">QUICK VIEW</a>
                   
                </div>
            </div>
        @endforeach
    </div>
</section>




<section id="pagination" class="section-p1">
    <a href= "#">1</a>
    <a href= "#">2</a>
    <a href= "#"><i class="fal fa-long-arrow-alt-right"></i></a>



@include('footer')


<link href="{{ asset('components/sxript.js') }}" rel="stylesheet">    <!-- Assuming your CSS file is in public/css/style.css -->


</body>
