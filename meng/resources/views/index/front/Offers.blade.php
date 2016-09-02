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
		<?php
		date_default_timezone_set("PRC");
		$nowtime = time();
		$rq = date("Y-m-d",$nowtime);
		?>
	<section id="content">
		<div class="wrapper pad1">
			<article class="col1">
				<div class="pad_bot3">
				<div class="box1">
					<h2 class="top">搜索航班</h2>
						<form id="form_4" method="post">
										<div>
											<div class="row">
												<span class="left">出发地</span>
												<input type="text" class="input">
											</div>
											<div class="row">
												<span class="left">目的地</span>
												<input type="text" class="input">
											</div>
											<div class="row">
												<span class="left">出发航班</span>
												<input type="text" class="input1"  onfocus="MyCalendar.SetDate(this)" value="<?php echo $rq;?>" name="gotime">

											</div>
											<div class="row">
												<span class="left">返回航班</span>
												<input type="text" class="input1" onfocus="MyCalendar.SetDate(this)" value="<?php echo $rq;?>" name="backtime">
											</div>
											<div class="row">
												<span class="left">成人</span>
												<input type="text" class="input2" value="2"  onblur="if(this.value=='') this.value='2'" onFocus="if(this.value =='2' ) this.value=''">
											</div>
											<div class="row">
												<span class="left">儿童</span>
												<input type="text" class="input2" value="0"  onblur="if(this.value=='') this.value='0'" onFocus="if(this.value =='0' ) this.value=''">
												<span class="pad_left1">(0-11 years)</span>
											</div>
											<div class="wrapper">
												<span class="right relative"><a href="#" class="button1" onClick="document.getElementById('form_4').submit()"><strong>Search</strong></a></span>
											</div>
										</div>
									</form>
						</div>
						</div>
				<div class="box1">
							<h2 class="top">本周的热门报价</h2>
							<div class="pad">
								<strong>地区</strong><br>
								<ul class="pad_bot1 list1">
									<li>
										<span class="right color1">价格</span>
										<a href="{{URL('books')}}">景点</a>
									</li>
								</ul>
								<strong>地区</strong><br>
								<ul class="pad_bot1 list1">
									<li>
										<span class="right color1">价格</span>
										<a href="{{URL('books')}}">景点</a>
									</li>
									<li>
										<span class="right color1">价格</span>
										<a href="{{URL('books')}}">景点</a>
									</li>
								</ul>
								<strong>地区</strong><br>
								<ul class="pad_bot2 list1">
									<li>
										<span class="right color1">价格</span>
										<a href="{{URL('books')}}">景点</a>
									</li>
									<li>
										<span class="right color1">价格</span>
										<a href="{{URL('books')}}">景点</a>
									</li>
									<li>
										<span class="right color1">价格</span>
										<a href="{{URL('books')}}">景点</a>
									</li>
								</ul>
								<strong>地区</strong><br>
								<ul class="pad_bot2 list1">
									<li>
										<span class="right color1">价格</span>
										<a href="{{URL('books')}}">景点</a>
									</li>
									<li>
										<span class="right color1">价格</span>
										<a href="{{URL('books')}}">景点</a>
									</li>
								</ul>
								<strong>地区</strong><br>
								<ul class="pad_bot2 list1">
									<li>
										<span class="right color1">价格</span>
										<a href="{{URL('books')}}">景点</a>
									</li>
								</ul>
							</div>
						</div>
					</article>
					<article class="col2">
						<h3 class="pad_top1">特价景区</h3>
						<div class="wrapper pad_bot3">
							<figure class="left marg_right1"><img src="images/page2_img1.jpg" alt=""></figure>
							<div class="cols">
							<h4>地区</h4>
							<ul class="list1">
								<li>
									<span class="color1 right">价格</span>
									<a href="{{URL('books')}}">景点</a>
								</li>
								<li>
									<span class="color1 right">价格</span>
									<a href="{{URL('books')}}">景点</a>
								</li>
								<li>
									<span class="color1 right">价格</span>
									<a href="{{URL('books')}}">景点</a>
								</li>
								<li>
									<span class="color1 right">价格</span>
									<a href="{{URL('books')}}">景点</a>
								</li>
								<li>
									<span class="color1 right">价格</span>
									<a href="{{URL('books')}}">景点</a>
								</li>
								<li>
									<a href="#">更多目的地</a>
								</li>
							</ul>
							</div>
						</div>
						<h3>从那到那</h3>
						<div class="wrapper pad_bot3">
							<figure class="left marg_right1"><img src="images/page2_img2.jpg" alt=""></figure>
							<div class="cols">
							<h4>来自某地区</h4>
							<ul class="list1 pad_bot1">
								<li>
									<span class="color1 right">价格</span>
									<a href="{{URL('books')}}">景区</a>
								</li>
							</ul>
							<h4>来自某地区</h4>
							<ul class="list1 pad_bot1">
								<li>
									<span class="color1 right">价格</span>
									<a href="{{URL('books')}}">景区</a>
								</li>
								<li>
									<span class="color1 right">价格</span>
									<a href="{{URL('books')}}">景区</a>
								</li>
								<li>
									<span class="color1 right">价格</span>
									<a href="{{URL('books')}}">景区</a>
								</li>
							</ul>
							<h4>来自某地区</h4>
							<ul class="list1">
								<li>
									<span class="color1 right">价格</span>
									<a href="{{URL('books')}}">景区</a>
								</li>
								<li>
									<span class="color1 right">价格</span>
									<a href="{{URL('books')}}">景区</a>
								</li>
								<li>
									<span class="color1 right">价格</span>
									<a href="{{URL('books')}}">景区</a>
								</li>
							</ul>
							</div>
						</div>
						<h3>英国的洲际经济特</h3>
						<div class="wrapper">
							<figure class="left marg_right1"><img src="images/page2_img3.jpg" alt=""></figure>
							<div class="cols">
							<h4>来自英国</h4>
							<ul class="list1 pad_bot1">
								<li>
									<span class="color1 right">from GBP 464.-</span>
									<a href="{{URL('books')}}">香港</a>
								</li>
								<li>
									<span class="color1 right">from GBP 509.-</span>
									<a href="{{URL('books')}}">约翰内斯堡</a>
								</li>
								<li>
									<span class="color1 right">from GBP 601.-</span>
									<a href="{{URL('books')}}">曼谷</a>
								</li>
								<li>
									<span class="color1 right">from GBP 727.-</span>
									<a href="{{URL('books')}}">保罗</a>
								</li>
								<li>
									<span class="color1 right">from GBP 464.-</span>
									<a href="{{URL('books')}}">苏黎世</a>
								</li>
								<li>
									<span class="color1 right">from GBP 509.-</span>
									<a href="{{URL('books')}}">日内瓦</a>
								</li>
								<li>
									<span class="color1 right">from GBP 601.-</span>
									<a href="{{URL('books')}}">巴塞尔</a>
								</li>
								<li>
									<a href="#">更多的优惠</a>
								</li>
							</ul>
								订单由XX年XX月XX日至XX年XX月XX日之间旅行。
							</div>
						</div>
					</article>
				</div>
			</section>
			<!--content end-->
			<!--footer -->
			<footer>
				<div class="wrapper">
					<ul id="icons">
						<li><a href="#" class="normaltip" title="Facebook"><img src="../public/front/images/icon1.jpg" alt=""></a></li>
						<li><a href="#" class="normaltip" title="Delicious"><img src="../public/front/images/icon2.jpg" alt=""></a></li>
						<li><a href="#" class="normaltip" title="Stumble Upon"><img src="../public/front/images/icon3.jpg" alt=""></a></li>
						<li><a href="#" class="normaltip" title="Twitter"><img src="../public/front/images/icon4.jpg" alt=""></a></li>
						<li><a href="#" class="normaltip" title="Linkedin"><img src="../public/front/images/icon5.jpg" alt=""></a></li>
						<li><a href="#" class="normaltip" title="Reddit"><img src="../public/front/images/icon6.jpg" alt=""></a></li>
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