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
        <div class="wrapper pad1">
            <article class="col">

                <h3>机票</h3>
                <div class="wrapper pad_bot3">
                  <table>
                      <tr style="background: #f0efee">
                          <td style="width: 150px;">航空公司</td>
                          <td style="width: 150px;">发票</td>
                          <td style="width: 150px;">机舱</td>
                          <td style="width: 150px;">价格</td>
                          <td style="width: 150px;"></td>
                      </tr>
                      <tr style="background: #a6e1ec">
                          <td style="width: 150px;">4组小公司</td>
                          <td style="width: 150px;">往返票</td>
                          <td style="width: 150px;">头舱</td>
                          <td style="width: 150px;"><b><font color="#f00000">￥5000</font></b></td>
                          <td style="width: 150px;"><input type="button" value="选定"/> </td>
                      </tr>
                  </table>
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
</script>
</body>
</html>