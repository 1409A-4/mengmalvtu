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
			<article class="col1">
				<div class="pad_bot3">
				<div class="box1">
					<h2 class="top">Search and Book Flights</h2>
						<form id="form_4" method="post">
										<div>
											<div class="row">
												<span class="left">From</span>
												<input type="text" class="input">
											</div>
											<div class="row">
												<span class="left">To</span>
												<input type="text" class="input">
											</div>
											<div class="row">
												<span class="left">Outbound flight</span>
												<input type="text" class="input1" value="03.05.2011"  onblur="if(this.value=='') this.value='03.05.2011'" onFocus="if(this.value =='03.05.2011' ) this.value=''">
											</div>
											<div class="row">
												<span class="left">Return flight</span>
												<input type="text" class="input1" value="10.05.2011"  onblur="if(this.value=='') this.value='10.05.2011'" onFocus="if(this.value =='10.05.2011' ) this.value=''">
											</div>
											<div class="row">
												<span class="left">Adults</span>
												<input type="text" class="input2" value="2"  onblur="if(this.value=='') this.value='2'" onFocus="if(this.value =='2' ) this.value=''">
											</div>
											<div class="row">
												<span class="left">Children</span>
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
							<h2 class="top">Hot Offers of the Week</h2>
							<div class="pad">
								<strong>Birmingham</strong><br>
								<ul class="pad_bot1 list1">
									<li>
										<span class="right color1">from GBP 143.-</span>
										<a href="{{URL('books')}}">Zurich</a>
									</li>
								</ul>
								<strong>London (LCY)</strong><br>
								<ul class="pad_bot1 list1">
									<li>
										<span class="right color1">from GBP 176.-</span>
										<a href="{{URL('books')}}">Geneva</a>
									</li>
									<li>
										<span class="right color1">from GBP 109.-</span>
										<a href="{{URL('books')}}">Zurich</a>
									</li>
								</ul>
								<strong>London (LHR)</strong><br>
								<ul class="pad_bot2 list1">
									<li>
										<span class="right color1">from GBP 100.-</span>
										<a href="{{URL('books')}}">Geneva</a>
									</li>
									<li>
										<span class="right color1">from GBP 112.-</span>
										<a href="{{URL('books')}}">Zurich</a>
									</li>
									<li>
										<span class="right color1">from GBP 88.-</span>
										<a href="{{URL('books')}}">Basel</a>
									</li>
								</ul>
								<strong>Manchester</strong><br>
								<ul class="pad_bot2 list1">
									<li>
										<span class="right color1">from GBP 97.-</span>
										<a href="{{URL('books')}}">Basel</a>
									</li>
									<li>
										<span class="right color1">from GBP 103.-</span>
										<a href="{{URL('books')}}">Zurich</a>
									</li>
								</ul>
								<strong>Edinburgh</strong><br>
								<ul class="pad_bot2 list1">
									<li>
										<span class="right color1">from GBP 165.-</span>
										<a href="{{URL('books')}}">Zurich</a>
									</li>
								</ul>
							</div>
						</div>
					</article>
					<article class="col2">
						<h3 class="pad_top1">UK Europe Specials</h3>
						<div class="wrapper pad_bot3">
							<figure class="left marg_right1"><img src="images/page2_img1.jpg" alt=""></figure>
							<div class="cols">
							<h4>From UK</h4>
							<ul class="list1">
								<li>
									<span class="color1 right">from GBP 130.-</span>
									<a href="{{URL('books')}}">Malaga</a>
								</li>
								<li>
									<span class="color1 right">GBP 144.-</span>
									<a href="{{URL('books')}}">Rome</a>
								</li>
								<li>
									<span class="color1 right">from GBP 146.-</span>
									<a href="{{URL('books')}}">Budapest</a>
								</li>
								<li>
									<span class="color1 right">from GBP 146.-</span>
									<a href="{{URL('books')}}">Bucharest</a>
								</li>
								<li>
									<span class="color1 right">from GBP 159.-</span>
									<a href="{{URL('books')}}">Athens</a>
								</li>
								<li>
									<a href="#">More destinations</a>
								</li>
							</ul>
							</div>
						</div>
						<h3>Switzerland Special from UK</h3>
						<div class="wrapper pad_bot3">
							<figure class="left marg_right1"><img src="images/page2_img2.jpg" alt=""></figure>
							<div class="cols">
							<h4>From Birmingham</h4>
							<ul class="list1 pad_bot1">
								<li>
									<span class="color1 right">from GBP 143.-</span>
									<a href="{{URL('books')}}">Zurich</a>
								</li>
							</ul>
							<h4>From London Heatrow</h4>
							<ul class="list1 pad_bot1">
								<li>
									<span class="color1 right">from GBP 146.-</span>
									<a href="{{URL('books')}}">Zurich</a>
								</li>
								<li>
									<span class="color1 right">from GBP 146.-</span>
									<a href="{{URL('books')}}">Geneva</a>
								</li>
								<li>
									<span class="color1 right">from GBP 159.-</span>
									<a href="{{URL('books')}}">Basel</a>
								</li>
							</ul>
							<h4>From Manchester</h4>
							<ul class="list1">
								<li>
									<span class="color1 right">from GBP 146.-</span>
									<a href="{{URL('books')}}">Zurich</a>
								</li>
								<li>
									<span class="color1 right">from GBP 146.-</span>
									<a href="{{URL('books')}}">Geneva</a>
								</li>
								<li>
									<span class="color1 right">from GBP 159.-</span>
									<a href="{{URL('books')}}">Basel</a>
								</li>
							</ul>
							</div>
						</div>
						<h3>UK Intercontinental Economy Special</h3>
						<div class="wrapper">
							<figure class="left marg_right1"><img src="images/page2_img3.jpg" alt=""></figure>
							<div class="cols">
							<h4>From UK</h4>
							<ul class="list1 pad_bot1">
								<li>
									<span class="color1 right">from GBP 464.-</span>
									<a href="{{URL('books')}}">Hong Kong</a>
								</li>
								<li>
									<span class="color1 right">from GBP 509.-</span>
									<a href="{{URL('books')}}">Johannesburg</a>
								</li>
								<li>
									<span class="color1 right">from GBP 601.-</span>
									<a href="{{URL('books')}}">Bangkok</a>
								</li>
								<li>
									<span class="color1 right">from GBP 727.-</span>
									<a href="{{URL('books')}}">Paulo</a>
								</li>
								<li>
									<span class="color1 right">from GBP 464.-</span>
									<a href="{{URL('books')}}">Zurich</a>
								</li>
								<li>
									<span class="color1 right">from GBP 509.-</span>
									<a href="{{URL('books')}}">Geneva</a>
								</li>
								<li>
									<span class="color1 right">from GBP 601.-</span>
									<a href="{{URL('books')}}">Basel</a>
								</li>
								<li>
									<a href="#">More offers</a>
								</li>
							</ul>
							Book by 15 May 2011 and travel between 16 April and 30 September 2011.
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