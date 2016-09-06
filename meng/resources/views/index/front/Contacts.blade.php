<!DOCTYPE html>
<html lang="en">
<head>
  <title>Contacts</title>
<meta charset="utf-8">
	@include('index.public.links');
</head>

<body id="page6">
<div class="main">
	@include('index.public.header')
<!--content -->
	<section id="content">
		<div class="wrapper pad1">
			<article class="col1">
				<div class="box1">
							<h2 class="top">Contact Us</h2>
							<div class="pad">
								<div class="wrapper pad_bot1">
									<p class="cols pad_bot2"><strong>Country:<br>
										City:<br>
										Address:<br>
										Email:</strong></p>
									<p class="color1 pad_bot2">USA<br>
										San Diego<br>
										Beach st. 54<br>
										<a href="mailto:">airlines@mail.com</a></p>
								</div>
							</div>
							<h2>Miscellaneous Info</h2>
							<div class="pad pad_bot1">
								<p class="pad_bot2">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inven- tore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolore ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat volup- tatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam.</p>
							</div>
						</div>
					</article>
					<article class="col2">
						<h3 class="pad_top1">Contact Form</h3>
						<form id="ContactForm">
							<div>
								<div  class="wrapper">
									<span>Name:</span>
									<input type="text" class="input" >
								</div>
								<div  class="wrapper">
									<span>Email:</span>
									<input type="text" class="input" >								
								</div>
								<div  class="textarea_box">
									<span>Message:</span>
									<textarea name="textarea" cols="1" rows="1"></textarea>								
								</div>
								<a href="#" class="button1" onClick="document.getElementById('ContactForm').submit()"><strong>Send</strong></a>
								<a href="#" class="button1" onClick="document.getElementById('ContactForm').reset()"><strong>Clear</strong></a>
							</div>
						</form>
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
</body>
</html>