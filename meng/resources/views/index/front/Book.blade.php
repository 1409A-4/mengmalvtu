<!DOCTYPE html>
<html lang="en">
<head>
  <title>Book</title>
<meta charset="utf-8">
	@include('index.public.links');
</head>
<body id="page3">
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
				<div class="box1">
					<h2 class="top">本周热销</h2>
					<div class="pad">
						<strong>北京</strong><br>
						<ul class="pad_bot1 list1">
							<li><span class="right color1">from GBP 143.-</span><a href="{{URL('books')}}">故宫</a></li>
						</ul>
					</div>
				</div>
			</article>
			<article class="col2">
					<div class="tabs2">
							<ul class="nav">
								<li class="selected"><a href="#Flight">飞机</a></li>
								<li><a href="#Hotel">旅店</a></li>
								<li class="end"><a href="#Rental">租赁</a></li>
							</ul>
							<div class="content">
								<div class="tab-content" id="Flight">
									<form id="form_5" class="form_5" method="post">
										<div>
											<div class="radio">
												<div class="wrapper">
													 <input type="radio" name="name1" checked>
													 <span class="left">显示价格</span>
													 <input type="radio" name="name1">
													 <span class="left">显示航班</span>
												</div>
											</div>
											<div class="pad">
												<div class="wrapper under">
													<div class="col1">
														<div class="row"><span class="left">出发地</span>
															<input type="text" class="input">
															<a href="#" class="help"></a>
														</div>
														<div class="row"><span class="left">目的地</span>
															<input type="text" class="input">
															<a href="#" class="help"></a>
														</div>
													</div>
													<div class="check_box">
														<input type="checkbox">
														<span>第一种方式</span>
														<a href="#" class="help"></a>
													</div>
													<div class="check_box">
														<input type="checkbox">
														<span>直达航班</span>
													</div>
												</div>
												<div class="wrapper under">
													<span class="left">航班</span>
													<div class="cols marg_right1">
														<h6>出港航班</h6>
														<div class="row">

                                                            <input type="text" class="input1" onfocus="MyCalendar.SetDate(this)" value="<?php echo $rq;?>" name="Out_time">
														</div>

													</div>
												</div>
												<div class="wrapper pad_bot1">
													<span class="left">乘客</span>
													<div class="cols marg_right1">
														<div class="row">
															<input type="text" class="input2" value="2"  onblur="if(this.value=='') this.value='2'" onFocus="if(this.value =='2' ) this.value=''">
															<span class="left">成人</span>
															<a href="#" class="help"></a>
														</div>
														<div class="row">
															<input type="text" class="input2" value="0"  onblur="if(this.value=='') this.value='0'" onFocus="if(this.value =='0' ) this.value=''">
															<span class="left">儿童</span>
															<a href="#" class="help"></a>
														</div>
													</div>
													<div class="cols">
														<div class="select1"><span class="left">机舱</span><select><option>经济舱</option></select>
															<a href="#" class="help"></a>
														</div>
														<div class="select1"><span class="left">航空公司</span><select><option>航空公司</option></select>
															<a href="#" class="help"></a>
														</div>
													</div>
													<span class="right relative"><a href="#" class="button1" onClick="document.getElementById('form_5').submit()"><strong>Search</strong></a></span>
												</div>
											</div>
										</div>
									</form>
								</div>
								<div class="tab-content" id="Hotel">
									<form id="form_6" class="form_5" method="post">
										<div>
											<div class="radio">
												<div class="wrapper">
													 <input type="radio" name="name1" checked>
													 <span class="left">显示价格</span>
													 <input type="radio" name="name1">
													 <span class="left">显示航班</span>
												</div>
											</div>
											<div class="pad">
												<div class="wrapper under">
													<div class="col1">
														<div class="row"><span class="left">出发地</span>
															<input type="text" class="input">
															<a href="#" class="help"></a>
														</div>
														<div class="row"><span class="left">目的地</span>
															<input type="text" class="input">
															<a href="#" class="help"></a>
														</div>
													</div>
													<div class="check_box">
														<input type="checkbox">
														<span>第一种方式</span>
														<a href="#" class="help"></a>
													</div>
													<div class="check_box">
														<input type="checkbox">
														<span>直达航班</span>
													</div>
												</div>
												<div class="wrapper under">
													<span class="left">航班</span>
													<div class="cols marg_right1">
														<h6>出港航班</h6>
														<div class="row">

                                                            <input type="text" class="input1" onfocus="MyCalendar.SetDate(this)" value="<?php echo $rq;?>" name="Out1_time">
														</div>

													</div>
												</div>
												<div class="wrapper pad_bot1">
													<span class="left">乘客</span>
													<div class="cols marg_right1">
														<div class="row">
															<input type="text" class="input2" value="2"  onblur="if(this.value=='') this.value='2'" onFocus="if(this.value =='2' ) this.value=''">
															<span class="left">成人</span>
															<a href="#" class="help"></a>
														</div>
														<div class="row">
															<input type="text" class="input2" value="0"  onblur="if(this.value=='') this.value='0'" onFocus="if(this.value =='0' ) this.value=''">
															<span class="left">儿童</span>
															<a href="#" class="help"></a>
														</div>
													</div>
													<div class="cols">

														<div class="select1"><span class="left">机舱</span><select><option>经济</option></select><a href="#" class="help"></a></div>
														<div class="select1"><span class="left">航空公司</span><select><option>航班</option></select><a href="#" class="help"></a></div>

													</div>
													<span class="right relative"><a href="#" class="button1" onClick="document.getElementById('form_6').submit()"><strong>Search</strong></a></span>
												</div>
											</div>
										</div>
									</form>
								</div>
								<div class="tab-content" id="Rental">
									<form id="form_7" class="form_5" method="post">
										<div>
											<div class="radio">
												<div class="wrapper">
													 <input type="radio" name="name1" checked><span class="left">显示价格</span>
													 <input type="radio" name="name1"><span class="left">显示航班</span>
												</div>
											</div>
											<div class="pad">
												<div class="wrapper under">
													<div class="col1">
														<div class="row"><span class="left">出发地</span><input type="text" class="input"><a href="#" class="help"></a></div>
														<div class="row"><span class="left">目的地</span><input type="text" class="input"><a href="#" class="help"></a></div>
													</div>
													<div class="check_box"><input type="checkbox"><span>第一种方式</span><a href="#" class="help"></a></div>
													<div class="check_box"><input type="checkbox"><span>直达航班</span></div>
												</div>
												<div class="wrapper under">
													<span class="left">航班</span>
													<div class="cols marg_right1">
														<h6>出港航班</h6>
														<div class="row">

                                                            <input type="text" class="input1" onfocus="MyCalendar.SetDate(this)" value="<?php echo $rq;?>" name="Out3_time">

														</div>
													</div>
												</div>
												<div class="wrapper pad_bot1">
													<span class="left">乘客</span>
													<div class="cols marg_right1">
														<div class="row">
															<input type="text" class="input2" value="2"  onblur="if(this.value=='') this.value='2'" onFocus="if(this.value =='2' ) this.value=''">
															<span class="left">成人</span>
															<a href="#" class="help"></a>
														</div>
														<div class="row">
															<input type="text" class="input2" value="0"  onblur="if(this.value=='') this.value='0'" onFocus="if(this.value =='0' ) this.value=''">
															<span class="left">儿童</span>
															<a href="#" class="help"></a>
														</div>
													</div>
													<div class="cols">

														<div class="select1"><span class="left">机舱</span><select><option>经济舱</option></select>
															<a href="#" class="help"></a>
														</div>
														<div class="select1"><span class="left">航空公司</span><select><option>航空公司</option></select>

															<a href="#" class="help"></a>
														</div>
													</div>
													<span class="right relative"><a href="#" class="button1" onClick="document.getElementById('form_7').submit()"><strong>Search</strong></a></span>
												</div>
											</div>
										</div>
									</form>
								</div>
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
		$('.form_5').jqTransform({imgPath:'jqtransformplugin/img/'});	
	});
	$(document).ready(function() {
		tabs2.init();
	});
</script>
</body>
</html>