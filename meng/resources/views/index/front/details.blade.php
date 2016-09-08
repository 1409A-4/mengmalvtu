<!DOCTYPE html>
<html lang="en">
<head>
    <title>Offers</title>
    <meta charset="utf-8">
    @include('index.public.links');
</head>
<body id="page2">
<div class="main">
@include('index.public.header')
<!--content -->
    <section id="content">
        <div class="for_banners">
            <article class="col1">
        <img src="images/page2_img1.jpg" alt="" style="width:500px;"><br/><br/>
        <div class="show"></div>
        <p>标题：<input type="text" name="title" /></p>
        <p>内容：<textarea name="content" id="con" cols="30" rows="10"></textarea></p>
        <p><input type="button" class="btn" value="评论" /></p>
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
    jQuery(document).ready(function($) {
        $('#form_4').jqTransform({imgPath:'jqtransformplugin/img/'});
    });
    //jq无刷新评论
    $(function(){
        $('.btn').click(function(){
            var title = $('input[name=title]').val();
            var content = $('#con').val();
            $('.show').html("<p>"+title+"::"+content+"</p>");
        })
    })
</script>
</body>
</html>