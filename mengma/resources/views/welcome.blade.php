<!DOCTYPE HTML>
<head>
    <title>首页</title>
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
    <div class="content_top">
        <div class="wrap">
            <h1><a href="#">WELCOME.</a></h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, </p>
            <span><a class="learnmore" href="#">LEARN MORE</a></span>
        </div>
    </div>
    <div class="copyrights">Collect from <a href="http://www.cssmoban.com/"  title="网站模板">网站模板</a></div>
    <div class="content-grids">
        <div class="wrap">
            <div class="grid">
                <a href="#"><img src="images/grids-img1.jpg" title="image-name" /></a>
                <h3>DESTINATIONS</h3>
                <p>Lorem ipsum dolor sit amet consectetur adiing elit. In volutpat luctus eros ac placerat. Quisque erat metus facilisis non feu,aliquam hendrerit quam. Donec ut lectus vel dolor adipiscing tincnt.</p>
                <a class="button" href="{{url('scenicSpot')}}">More</a>
            </div>
            <div class="grid">
                <a href="#"><img src="images/grids-img2.jpg" title="image-name" /></a>
                <h3>NEWS & EVENTS</h3>
                <p>Lorem ipsum dolor sit amet consectetur adiing elit. In volutpat luctus eros ac placerat. Quisque erat metus facilisis non feu,aliquam hendrerit quam. Donec ut lectus vel dolor adipiscing tincnt.</p>
                <a class="button" href="{{url('scenicSpot')}}">More</a>
            </div>
            <div class="grid last-grid">
                <a href="#"><img src="images/grids-img3.jpg" title="image-name" /></a>
                <h3>SUPPORT</h3>
                <p>Lorem ipsum dolor sit amet consectetur adiing elit. In volutpat luctus eros ac placerat. Quisque erat metus facilisis non feu,aliquam hendrerit quam. Donec ut lectus vel dolor adipiscing tincnt.</p>
                <a class="button" href="{{url('scenicSpot')}}">More</a>
            </div>

            <div class="clear"> </div>
        </div>
    </div>
    <div class="specials">
        <div class="wrap">
            <div class="specials-heading">
                <h3>Traveling Specials</h3>
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
@include('.index.public.foot')
</html>

