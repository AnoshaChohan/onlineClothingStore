@include('header')


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


@include('footer')




<link href="{{ asset('components/sxript.js') }}" rel="stylesheet">    <!-- Assuming your CSS file is in public/css/style.css -->


</body>
</html>