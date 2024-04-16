@include('header')


<section id="page-header" class="about-header">
    <h2>#KnowUs</h2>
    <p> Lorem ipsum dolor sit amet, consecteur</p>

</section>

<section id="about-head" class="section-p1">
 <img src="/images/about/a6.jpg" alt="">
 <div>
    <h2> Who Are We </h2>
    <p> Lorem Ipsum is simply dummy text of the printing
         and typesetting industry. Lorem Ipsum has been
          the industry's standard dummy text ever since 
          the 1500s, when an unknown printer took a galley
           of type and scrambled it to make a type specimen book. </p>

          <abbr title=""> Create stuning images with as a little contrary
            like thanks to a choics of Basic and Creative nodes</abbr>

            <br><br>

            <marquee bgcolor="#ccc" loop="-1" scrollamount="5" width="100%">Create stuning images with as a little contrary
            like thanks to a choics of Basic and Creative nodes
            </marquee>

        </div>

</section>

<section id="about-app" class="section-p1">
<h1>Download Our<a href="#">App</a></h1>
<div class="video">
    <video autoplay muted loop src="images/about/1.mp4"></video>

</section>
<link href="{{ asset('components/sxript.js') }}" rel="stylesheet">    <!-- Assuming your CSS file is in public/css/style.css -->



</body>

@include('footer')
</html>