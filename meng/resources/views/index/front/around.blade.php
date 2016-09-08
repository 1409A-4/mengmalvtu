<!DOCTYPE html>
<html lang="en">
<head>
    <title>About</title>
    <meta charset="utf-8">
    @include('index.public.links')
</head>
<body id="page1">
<div class="main">
@include('index.public.header')
<!--content -->
    <?php
    date_default_timezone_set("PRC");
    $nowtime = time();
    $rq = date("Y-m-d",$nowtime);
    ?>
    <section id="content">
        <div class="wrapper pad1">
        <article class="col">
        <h3 class="pad_top1">周边游</h3>
            <figure class="left marg_right1">

                <table>
                    <tr>
                        <td style="padding: 10px 10px 10px 10px"><img src="images/page2_img1.jpg" alt=""></td>
                        <td style="padding: 10px 10px 10px 10px"><a href="" style="text-decoration:none;
"><b style="font-size: 25px;">这个景点很好看   大促销</b></a><br/><br/><input type="button" value="团购保障" style="background: #ff0000; font-family: 华文楷体; height: 30px;" /><input type="button" value="无保障" style="background: #f0efee; font-family: 华文楷体; height: 30px;" /><br />在哪出发:   后面就是介绍了</td>
                    </tr>
                    <tr>
                        <td style="padding: 10px 10px 10px 10px"><img src="images/page2_img1.jpg" alt=""></td>
                        <td style="padding: 10px 10px 10px 10px"><a href="" style="text-decoration:none;
"><b style="font-size: 25px;">这个是特卖</b></a><br/><br/><input type="button" value="单人保障" style="background: #ff0000; font-family: 华文楷体; height: 30px;" /><input type="button" value="无保障" style="background: #f0efee; font-family: 华文楷体; height: 30px;" /><br />在哪出发:   后面就是介绍了</td>
                    </tr>
                </table>
            </figure>
            </article>
            </div>
    </section>
    <!--content end-->
    <!--footer -->
    <footer>
        <div class="wrapper">
            <ul id="icons">
                <li><a href="#" class="normaltip" title="Facebook"><img src="images/icon1.jpg" alt=""></a></li>
                <li><a href="#" class="normaltip" title="Delicious"><img src="images/icon2.jpg" alt=""></a></li>
                <li><a href="#" class="normaltip" title="Stumble Upon"><img src="images/icon3.jpg" alt=""></a></li>
                <li><a href="#" class="normaltip" title="Twitter"><img src="images/icon4.jpg" alt=""></a></li>
                <li><a href="#" class="normaltip" title="Linkedin"><img src="images/icon5.jpg" alt=""></a></li>
                <li><a href="#" class="normaltip" title="Reddit"><img src="images/icon6.jpg" alt=""></a></li>
            </ul>
            <div class="links">
                Collect from <a rel="nofollow" href="http://www.cssmoban.com/" target="_blank">网页模板</a> | <br>
                Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a></div>
        </div>
    </footer>
    <!--footer end-->
</div>
<script type="text/javascript"> Cufon.now(); </script>
<script>
    $(document).ready(function() {
        tabs.init();
    });
    jQuery(document).ready(function($) {
        $('#form_1, #form_2, #form_3').jqTransform({imgPath:'jqtransformplugin/img/'});
    });
    $(window).load(function() {
        $('#slider').nivoSlider({
            effect:'fade', //Specify sets like: 'fold,fade,sliceDown, sliceDownLeft, sliceUp, sliceUpLeft, sliceUpDown, sliceUpDownLeft'
            slices:15,
            animSpeed:500,
            pauseTime:6000,
            startSlide:0, //Set starting Slide (0 index)
            directionNav:false, //Next & Prev
            directionNavHide:false, //Only show on hover
            controlNav:false, //1,2,3...
            controlNavThumbs:false, //Use thumbnails for Control Nav
            controlNavThumbsFromRel:false, //Use image rel for thumbs
            controlNavThumbsSearch: '.jpg', //Replace this with...
            controlNavThumbsReplace: '_thumb.jpg', //...this in thumb Image src
            keyboardNav:true, //Use left & right arrows
            pauseOnHover:true, //Stop animation while hovering
            manualAdvance:false, //Force manual transitions
            captionOpacity:1, //Universal caption opacity
            beforeChange: function(){},
            afterChange: function(){},
            slideshowEnd: function(){} //Triggers after all slides have been shown
        });
    });
</script>

</body>
</html>