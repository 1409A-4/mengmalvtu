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
						<h3 class="pad_top1">景点</h3>
						<div class="wrapper pad_bot3">
							<figure class="left marg_right1">
								<table>
									<tr>
										<td style="padding: 0 10px 0 10px"><img src="images/page2_img1.jpg" alt=""></td>
										<td style="padding: 0 10px 0 10px"><img src="images/page2_img1.jpg" alt=""></td>
										<td style="padding: 0 10px 0 10px"><img src="images/page2_img1.jpg" alt=""></td>
									</tr>
									<tr>
										<td style="padding: 0 10px 0 10px">这个是特卖</td>
										<td style="padding: 0 10px 0 10px">这个是特卖</td>
										<td style="padding: 0 10px 0 10px">这个是特卖</td>
									</tr>
								</table>
							</figure>
						</div>
						<h3>酒店</h3>
						<div class="wrapper pad_bot3">
							<div class="cols">
								<h4>促销</h4>
								<ul class="list1 pad_bot1">
									<li>
										<span class="color1 right">from GBP 146.-</span>
										<a href="{{URL('books')}}">xx大酒店低价预定</a>
									</li>
									<li>
										<span class="color1 right">from GBP 146.-</span>
										<a href="{{URL('books')}}">XX豪华公寓预定</a>
									</li>
									<li>
										<span class="color1 right">from GBP 159.-</span>
										<a href="{{URL('books')}}">XX民居住宅</a>
									</li>
								</ul>
							</div>
							<figure class="left marg_right1">
								<table>
									<tr>
										<td  style="padding: 0 10px 0 10px"><img src="images/page2_img2.jpg" alt=""></td>
										<td  style="padding: 0 10px 0 10px"><img src="images/page2_img2.jpg" alt=""></td>
									</tr>
								</table>
							</figure>
						</div>
						<h3>机票特价</h3>
						<div class="wrapper pad_bot3">
							<figure class="left marg_right1"><img src="images/QQ.png" alt=""></figure>
							<figure class="left marg_right1">北京到大同<br/>10:00-12:00<br/>￥356元&nbsp;&nbsp;&nbsp;&nbsp;<input type="button" value="立抢" /> </figure>
							<figure class="left marg_right1">山西到大连<br/>10:00-12:00<br/>￥356元&nbsp;&nbsp;&nbsp;&nbsp;<input type="button" value="立抢" /></figure>
							<figure class="left marg_right1">北京到大同<br/>10:00-12:00<br/>￥356元&nbsp;&nbsp;&nbsp;&nbsp;<input type="button" value="立抢" /> </figure>
						</div>
						<h3>租车特价</h3>
						<div class="cols">
							<h4>租车活动</h4>
							<ul class="list1 pad_bot1">
								<li>
									<span class="color1 right">from GBP 146.-</span>
									<a href="{{URL('books')}}">跑车出租</a>
								</li>
								<li>
									<span class="color1 right">from GBP 146.-</span>
									<a href="{{URL('books')}}">XX豪华公寓预定</a>
								</li>
								<li>
									<span class="color1 right">from GBP 159.-</span>
									<a href="{{URL('books')}}">XX民居住宅</a>
								</li>
							</ul>
						</div>
						<figure class="left marg_right1">
							<table>
								<tr>
									<td  style="padding: 0 10px 0 10px"><img src="images/che1.jpg" alt="" style="width: 260px; height: 150px;"></td>
									<td  style="padding: 0 10px 0 10px"><img src="images/che2.jpg" alt="" style="width: 260px; height: 150px;"></td>
								</tr>
							</table>
						</figure>

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