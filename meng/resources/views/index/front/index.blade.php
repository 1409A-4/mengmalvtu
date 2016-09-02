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
		<div class="for_banners">
			<article class="col1">
						<div class="tabs">
							<ul class="nav">
								<li class="selected"><a href="#Flight">航班</a></li>
								<li><a href="#Hotel">旅店</a></li>
								<li class="end"><a href="#Rental">租赁</a></li>
							</ul>
							<div class="content">
								<div class="tab-content" id="Flight">
									<form id="form_1" method="post">
										<div>
											<div class="radio">
												<div class="wrapper">
													 <input type="radio" name="name1" checked>
													 <span class="left">标准</span>
													 <input type="radio" name="name1">
													 <span class="left">世界地图</span>
												</div>
											</div>
											<div class="row">
												<span class="left">出发地</span>
												<input type="text" class="input">
											</div>
											<div class="row">
												<span class="left">目的地</span>
												<input type="text" class="input">
											</div>
											<div class="wrapper">
												<div class="col1">
													<div class="row">
														<span class="left">出发时间</span>
														<input type="text" class="input1"  onfocus="MyCalendar.SetDate(this)" value="<?php echo $rq;?>" name="starttime">
													</div>
													<div class="row">
														<span class="left">返回时间</span>
														<input type="text" class="input1"  onfocus="MyCalendar.SetDate(this)" value="<?php echo $rq;?>" name="endtime">
													</div>
												</div>
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
												<span class="right relative"><a href="#" class="button1" onClick="document.getElementById('form_1').submit()"><strong>Search</strong></a></span>
												<a href="#" class="link1">More Options</a>
											</div>
										</div>
									</form>
								</div>
								<div class="tab-content" id="Hotel">
									<form id="form_2" method="post">
										<div>
											<div class="radio">
												<div class="wrapper">
													 <input type="checkbox" checked>
													合作伙伴
												</div>
											</div>
											<div class="row">
												<span class="left">位置</span>
												<input type="text" class="input">
											</div>
											<div class="row">
												<span class="left">入住  </span>
												<input type="text" class="input1"  onfocus="MyCalendar.SetDate(this)" value="<?php echo $rq;?>" name="check_in_time">
												<a href="#" class="help"></a>
											</div>
											<div class="row">
												<span class="left">退房  </span>
												<input type="text" class="input1"  onfocus="MyCalendar.SetDate(this)" value="<?php echo $rq;?>" name="check_out_time">
												<a href="#" class="help"></a>
											</div>
											<div class="row">
												<span class="left">房间</span>
												<input type="text" class="input2" value="1"  onblur="if(this.value=='') this.value='1'" onFocus="if(this.value =='1' ) this.value=''">
												<a href="#" class="help"></a>
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
												<span class="right relative"><a href="#" class="button1" onClick="document.getElementById('form_2').submit()"><strong>Search</strong></a></span>
												<a href="#" class="link1">More Options</a>
											</div>
										</div>
									</form>
								</div>
								<div class="tab-content" id="Rental">
									<form id="form_3" method="post">
										<div>
											<div class="radio">
												<div class="wrapper">
													 <input type="radio" name="name2" checked>
													 <span class="left">出租汽车</span>
													 <input type="radio" name="name2">
													 <span class="left">汽车租赁</span>
												</div>
											</div>
											<div class="row">
												<span class="left">租金定位</span>
												<input type="text" class="input">
											</div>
											<div class="row">
												<span class="left">开始出租</span>
												<input type="text" class="input1"  onfocus="MyCalendar.SetDate(this)" value="<?php echo $rq;?>" name="begin_time">
											</div>
											<div class="row">
												<span class="left">返还出租</span>
												<input type="text" class="input1"  onfocus="MyCalendar.SetDate(this)" value="<?php echo $rq;?>" name="back_time">
											</div>
											<div class="row_select">
												<span class="left">英里 &amp; 更多</span>
												<select><option>no membership</option></select>
											</div>
											<div class="row_select">
												<div class="pad_left1">
													地区<br>
													<div class="select1">
														<select>
															@foreach($list as $v)
																<option><?php echo $v->region_name ?></option>
																@endforeach
														</select>
													</div>
												</div>
											</div>
											<div class="wrapper">
												<span class="right relative"><a href="#" class="button1" onClick="document.getElementById('form_3').submit()"><strong>Search</strong></a></span>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>	
					</article>
					<div id="slider">
						<img src="./public/index/images/banner1.jpg" alt="">
						<img src="./public/index/images/banner2.jpg" alt="">
						<img src="./public/index/images/banner3.jpg" alt="">
					</div>
				</div>
		<div class="wrapper pad1">
			<article class="col">
				<h3 class="pad_top1">特价景区</h3>
				<div class="wrapper pad_bot3">
					<table>
						<tr>
							<td><img src="images/page2_img1.jpg" alt=""></td>
							<td><img src="images/page2_img1.jpg" alt=""></td>
							<td><img src="images/page2_img1.jpg" alt=""></td>
						</tr>
					</table>

				</div>
				<h3>酒店优惠</h3>
				<div class="wrapper pad_bot3">
					<figure class="left marg_right1"><img src="images/page2_img2.jpg" alt=""></figure>
				</div>
				<h3>特价机票</h3>
				<div class="wrapper pad_bot3">
					<figure class="left marg_right1"><img src="images/page2_img3.jpg" alt=""></figure>
				</div>
				<h3>国际租车</h3>
				<div class="wrapper">
					<figure class="left marg_right1"><img src="images/page2_img3.jpg" alt=""></figure>
				</div>
			</article>
				</div>
			</section>
			<!--content end-->
			<!--footer -->
			<footer>
				<div class="wrapper">
					<ul id="icons">
						<li><a href="#" class="normaltip" title="Facebook"><img src="./public/index/images/icon1.jpg" alt=""></a></li>
						<li><a href="#" class="normaltip" title="Delicious"><img src="./public/index/images/icon2.jpg" alt=""></a></li>
						<li><a href="#" class="normaltip" title="Stumble Upon"><img src="./public/index/images/icon3.jpg" alt=""></a></li>
						<li><a href="#" class="normaltip" title="Twitter"><img src="./public/index/images/icon4.jpg" alt=""></a></li>
						<li><a href="#" class="normaltip" title="Linkedin"><img src="./public/index/images/icon5.jpg" alt=""></a></li>
						<li><a href="#" class="normaltip" title="Reddit"><img src="./public/index/images/icon6.jpg" alt=""></a></li>
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