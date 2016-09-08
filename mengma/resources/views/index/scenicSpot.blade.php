<!DOCTYPE HTML>
<head>
    <title>景区详情</title>
    <base href="{{URL::asset('index\/')}}"/>
    @include('.index.public.style')
</head>
<body>
<!---start-header---->
@include('.index.public.header')
<!---End-header---->
<!--start-image-slider---->
<div class="image-slider">
    <!-- Slideshow 1 -->
    <ul class="rslides" id="slider1">
        <li><img src="images/slider4.jpg" alt=""></li>
        <li><img src="images/slider2.jpg" alt=""></li>
        <li><img src="images/slider3.jpg" alt=""></li>
        <li><img src="images/slider1.jpg" alt=""></li>
    </ul>
    <!-- Slideshow 2 -->
</div>
<!--End-image-slider---->
<!---End-wrap---->
<div class="clear"> </div>
<!---start-content---->
<div class="content">
    <div class="wrap">
        <div class="about-us">
            <div class="about-header">
                <h3>About us</h3>
            </div>
            <div class="about-info">
                <a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus.</a>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Morbi nunc odio, gravida at, cursus nec, luctus a, lorem. Maecenas tristique orci ac sem. Duis ultricies pharetra magna. Donec accumsan malesuada orci. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Morbi nunc odio, gravida at, cursus nec, luctus a, lorem. Maecenas tristique orci ac sem. Duis ultricies pharetra magna. Donec accumsan malesuada orci. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Morbi nunc odio, gravida at, cursus nec, luctus a, lorem. Maecenas tristique orci ac sem. Duis ultricies pharetra magna. Donec accumsan male</p>
            </div>
        </div>
    </div>
    <div class="specials">
        <div class="wrap">
            <div class="specials-heading">
                <h3>Latest-News</h3>
            </div>
            <div class="specials-grids">
                <div class="special-grid">
                    <img src="images/grids-img1.jpg" title="image-name" />
                    <a href="#">Latest Plans</a>
                    <p>Lorem ipsum dolor sit amet consectetur adiing elit. In volutpat luctus eros ac placerat. Quisque erat metus facilisis non feu,aliquam hendrerit quam. Donec ut lectus vel dolor adipiscing tincnt.</p>
                </div>
                <div class="special-grid">
                    <img src="images/grids-img2.jpg" title="image-name" />
                    <a href="#">Pre Plans</a>
                    <p>Lorem ipsum dolor sit amet consectetur adiing elit. In volutpat luctus eros ac placerat. Quisque erat metus facilisis non feu,aliquam hendrerit quam. Donec ut lectus vel dolor adipiscing tincnt.</p>
                </div>
                <div class="special-grid spe-grid">
                    <img src="images/grids-img3.jpg" title="image-name" />
                    <a href="#">Free Plans</a>
                    <p>Lorem ipsum dolor sit amet consectetur adiing elit. In volutpat luctus eros ac placerat. Quisque erat metus facilisis non feu,aliquam hendrerit quam. Donec ut lectus vel dolor adipiscing tincnt.</p>
                </div>
                <div class="clear"> </div>
            </div>
        </div>
    </div>
    <div class="testmonials">
        <div class="wrap">
            <div class="testmonial-grid">
                <h3>TESTIMONIALS :</h3>
                <p>&#34; Lorem ipsum dolor sit amet, consectetur adipiscing elit. In volutpat luctus eros ac placerat. Quisque erat metus, facilisis non felis eu, aliquam hendrrit quam. Donec ut lectus vel dolor adipiscing tincidunt. Ut auctor diam at est iaculis, vitae interdum magna sagittis.&#34;</p>
                <a href="#"> - Lorem ipsum</a>
            </div>
        </div>
    </div>
</div>
<!---End-content---->
<!---End-content---->
@include('index.public.foot')
</body>
</html>

