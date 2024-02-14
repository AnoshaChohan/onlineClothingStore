<!-- @include('header')
@include('header2')

<div class="tagLineImg">
<img src="{{ asset('images/tagLine.png') }}" alt="tagLine">
</div>

<div class="divider"></div>

<div class="circleImages">
    <div class="circle">
        <img src="{{ asset('images/ladies.jpg') }}" alt="Ladies">
        <p>Ladies</p>
    </div>
    <div class="circle">
        <img src="{{ asset('images/kids.jpg') }}" alt="Kids">
        <p>Kids</p>
    </div>
    <div class="circle">
        <img src="{{ asset('images/gents.jpg') }}" alt="Gents">
        <p>Gents</p>
    </div>
</div>
<div class="divider"></div>

<div class ="FeaturedText">
<p> FEATURED PRODUCTS </p>
</div>


<div class ="featuredProducts">
    <div class="featuredImage">
    <img src= "{{ asset('images/featuredImg1.jpg') }}" alt="featuredImg1">
    <p>PRODUCT NAME</p>
    <p> $300</p>
    </div>
    <div class="featuredImage">
    <img src="{{asset('images/featuredImg2.jpg')}}" alt="featuredImg2">
    <p>PRODUCT NAME</p>
    <p> $300</p>
    </div>
</div>
<div class="divider"></div>

<div class="newsletter">
<div>
<h3>Newsletter</h3>
<p>Subscribe to Our Newsletter: Join our community 
    to receive exclusive offers, updates, and more. Stay in the loop!</p>
</div>

<div >
        <form action="your_subscribe_endpoint" method="POST">
            <input type="email" name="email" placeholder="Your Email Address" required>
            <button type="submit">Subscribe</button>
        </form>
</div>
</div>

<!-- <div class="subscribe-form">
        <form action="your_subscribe_endpoint" method="POST">
            <input type="email" name="email" placeholder="Your Email Address" required>
            <button type="submit">Subscribe</button>
        </form>
    </div> --> -->
