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
	<section id="content">
		<div class="wrapper pad1">
			<article class="col1">
				<div class="box1">
					<h2 class="top">本周热门价格</h2>
					<div class="pad">
						<strong>伯明翰</strong><br>
						<ul class="pad_bot1 list1">
							<li><span class="right color1">from GBP 143.-</span><a href="{{URL('books')}}">苏黎世</a></li>
						</ul>
						<strong>伦敦（lcy）</strong><br>
						<ul class="pad_bot1 list1">
							<li><span class="right color1">from GBP 176.-</span><a href="{{URL('books')}}">日内瓦</a></li>
							<li><span class="right color1">from GBP 109.-</span><a href="{{URL('books')}}">苏黎世</a></li>
						</ul>
						<strong>伦敦（lcy）</strong><br>
						<ul class="pad_bot2 list1">
							<li><span class="right color1">from GBP 100.-</span><a href="{{URL('books')}}">日内瓦</a></li>
							<li><span class="right color1">from GBP 112.-</span><a href="{{URL('books')}}">苏黎世</a></li>
							<li><span class="right color1">from GBP 88.-</span><a href="{{URL('books')}}">巴塞尔</a></li>
						</ul>
						<strong>曼彻斯特</strong><br>
						<ul class="pad_bot2 list1">
							<li><span class="right color1">from GBP 97.-</span><a href="{{URL('books')}}">巴塞尔</a></li>
							<li><span class="right color1">from GBP 103.-</span><a href="{{URL('books')}}">苏黎世</a></li>
						</ul>
						<strong>爱丁堡</strong><br>
						<ul class="pad_bot2 list1">
							<li><span class="right color1">from GBP 165.-</span><a href="{{URL('books')}}">苏黎世</a></li>
						</ul>
						<strong>伯明翰</strong><br>
						<ul class="pad_bot1 list1">
							<li><span class="right color1">from GBP 143.-</span><a href="{{URL('books')}}">苏黎世</a></li>
						</ul>
						<strong>伦敦（lcy）</strong><br>
						<ul class="pad_bot1 list1">
							<li><span class="right color1">from GBP 176.-</span><a href="{{URL('books')}}">日内瓦</a></li>
							<li><span class="right color1">from GBP 109.-</span><a href="{{URL('books')}}">苏黎世</a></li>
						</ul>
						<strong>伦敦（lhg）</strong><br>
						<ul class="pad_bot2 list1">
							<li><span class="right color1">from GBP 100.-</span><a href="{{URL('books')}}">日内瓦</a></li>
							<li><span class="right color1">from GBP 112.-</span><a href="{{URL('books')}}">苏黎世</a></li>
							<li><span class="right color1">from GBP 88.-</span><a href="{{URL('books')}}">巴塞尔</a></li>
						</ul>
					</div>
				</div>
			</article>
			<article class="col2">
					<div class="tabs2">
							<ul class="nav">
								<li class="selected"><a href="#Flight">航班</a></li>
								<li><a href="#Hotel">旅店</a></li>
								<li class="end"><a href="#Rental">租金</a></li>
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
															<input type="text" class="input1" value="03.05.2011"  onblur="if(this.value=='') this.value='03.05.2011'" onFocus="if(this.value =='03.05.2011' ) this.value=''">
															<input type="text" class="input1" value="+/- 0 Days"  onblur="if(this.value=='') this.value='+/- 0 Days'" onFocus="if(this.value =='+/- 0 Days' ) this.value=''">
														</div>
														<div class="marg_top1">
															<div class="select1">
															<a href="#" class="marker_left"></a>
															<select><option>May 11</option><option>June 11</option><option>July 11</option></select>
															<a href="#" class="marker_right"></a>
															</div>
														</div>
														<div class="calendar">
															<ul class="thead">
																<li>Mon</li>
																<li>Tue</li>
																<li>Wed</li>
																<li>Thu</li>
																<li>Fri</li>
																<li>Sat</li>
																<li>Sun</li>
															</ul>
															<ul class="tbody">
																<li><a href="#"></a></li>
																<li><a href="#"></a></li>
																<li><a href="#"></a></li>
																<li><a href="#"></a></li>
																<li><a href="#"></a></li>
																<li><a href="#"></a></li>
																<li><a href="#">1</a></li>
																<li><a href="#">2</a></li>
																<li><a href="#">3</a></li>
																<li><a href="#">4</a></li>
																<li><a href="#" class="active">5</a></li>
																<li><a href="#">6</a></li>
																<li><a href="#">7</a></li>
																<li><a href="#">8</a></li>
																<li><a href="#">9</a></li>
																<li><a href="#">10</a></li>
																<li><a href="#">11</a></li>
																<li><a href="#">12</a></li>
																<li><a href="#">13</a></li>
																<li><a href="#">14</a></li>
																<li><a href="#">15</a></li>
																<li><a href="#">16</a></li>
																<li><a href="#">17</a></li>
																<li><a href="#">18</a></li>
																<li><a href="#">19</a></li>
																<li><a href="#">20</a></li>
																<li><a href="#">21</a></li>
																<li><a href="#">22</a></li>
																<li><a href="#">23</a></li>
																<li><a href="#">24</a></li>
																<li><a href="#">25</a></li>
																<li><a href="#">26</a></li>
																<li><a href="#">27</a></li>
																<li><a href="#">28</a></li>
																<li><a href="#">29</a></li>
																<li><a href="#">30</a></li>
																<li><a href="#">31</a></li>
																<li><a href="#"></a></li>
																<li><a href="#"></a></li>
																<li><a href="#"></a></li>
																<li><a href="#"></a></li>
																<li><a href="#"></a></li>
															</ul>
														</div>
													</div>
													<div class="cols">
														<h5>出港航班</h5>
														<div class="row">
															<input type="text" class="input1" value="03.05.2011"  onblur="if(this.value=='') this.value='03.05.2011'" onFocus="if(this.value =='03.05.2011' ) this.value=''">
															<input type="text" class="input1" value="+/- 0 Days"  onblur="if(this.value=='') this.value='+/- 0 Days'" onFocus="if(this.value =='+/- 0 Days' ) this.value=''">
														</div>
														<div class="marg_top1">
															<div class="select1">
															<a href="#" class="marker_left"></a>
															<select><option>May 11</option><option>June 11</option><option>July 11</option></select>
															<a href="#" class="marker_right"></a>
															</div>
														</div>
														<div class="calendar">
															<ul class="thead">
																<li>Mon</li>
																<li>Tue</li>
																<li>Wed</li>
																<li>Thu</li>
																<li>Fri</li>
																<li>Sat</li>
																<li>Sun</li>
															</ul>
															<ul class="tbody">
																<li><a href="#"></a></li>
																<li><a href="#"></a></li>
																<li><a href="#"></a></li>
																<li><a href="#"></a></li>
																<li><a href="#"></a></li>
																<li><a href="#"></a></li>
																<li><a href="#">1</a></li>
																<li><a href="#">2</a></li>
																<li><a href="#">3</a></li>
																<li><a href="#">4</a></li>
																<li><a href="#" class="active">5</a></li>
																<li><a href="#">6</a></li>
																<li><a href="#">7</a></li>
																<li><a href="#">8</a></li>
																<li><a href="#">9</a></li>
																<li><a href="#">10</a></li>
																<li><a href="#">11</a></li>
																<li><a href="#">12</a></li>
																<li><a href="#">13</a></li>
																<li><a href="#">14</a></li>
																<li><a href="#">15</a></li>
																<li><a href="#">16</a></li>
																<li><a href="#">17</a></li>
																<li><a href="#">18</a></li>
																<li><a href="#">19</a></li>
																<li><a href="#">20</a></li>
																<li><a href="#">21</a></li>
																<li><a href="#">22</a></li>
																<li><a href="#">23</a></li>
																<li><a href="#">24</a></li>
																<li><a href="#">25</a></li>
																<li><a href="#">26</a></li>
																<li><a href="#">27</a></li>
																<li><a href="#">28</a></li>
																<li><a href="#">29</a></li>
																<li><a href="#">30</a></li>
																<li><a href="#">31</a></li>
																<li><a href="#"></a></li>
																<li><a href="#"></a></li>
																<li><a href="#"></a></li>
																<li><a href="#"></a></li>
																<li><a href="#"></a></li>
															</ul>
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
														<div class="select1"><span class="left">机舱</span><select><option>经济</option></select>
															<a href="#" class="help"></a>
														</div>
														<div class="select1"><span class="left">航空公司</span><select><option>航班</option></select>
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
														<div class="row"><span class="left">From</span>
															<input type="text" class="input">
															<a href="#" class="help"></a>
														</div>
														<div class="row"><span class="left">To</span>
															<input type="text" class="input">
															<a href="#" class="help"></a>
														</div>
													</div>
													<div class="check_box">
														<input type="checkbox">
														<span>One way</span>
														<a href="#" class="help"></a>
													</div>
													<div class="check_box">
														<input type="checkbox">
														<span>Direct flights</span>
													</div>
												</div>
												<div class="wrapper under">
													<span class="left">Flights</span>
													<div class="cols marg_right1">
														<h6>Outbound flight</h6>
														<div class="row">
															<input type="text" class="input1" value="03.05.2011"  onblur="if(this.value=='') this.value='03.05.2011'" onFocus="if(this.value =='03.05.2011' ) this.value=''">
															<input type="text" class="input1" value="+/- 0 Days"  onblur="if(this.value=='') this.value='+/- 0 Days'" onFocus="if(this.value =='+/- 0 Days' ) this.value=''">
														</div>
														<div class="marg_top1">
															<div class="select1">
															<a href="#" class="marker_left"></a>
															<select><option>May 11</option><option>June 11</option><option>July 11</option></select>
															<a href="#" class="marker_right"></a>
															</div>
														</div>
														<div class="calendar">
															<ul class="thead">
																<li>Mon</li>
																<li>Tue</li>
																<li>Wed</li>
																<li>Thu</li>
																<li>Fri</li>
																<li>Sat</li>
																<li>Sun</li>
															</ul>
															<ul class="tbody">
																<li><a href="#"></a></li>
																<li><a href="#"></a></li>
																<li><a href="#"></a></li>
																<li><a href="#"></a></li>
																<li><a href="#"></a></li>
																<li><a href="#"></a></li>
																<li><a href="#">1</a></li>
																<li><a href="#">2</a></li>
																<li><a href="#">3</a></li>
																<li><a href="#">4</a></li>
																<li><a href="#" class="active">5</a></li>
																<li><a href="#">6</a></li>
																<li><a href="#">7</a></li>
																<li><a href="#">8</a></li>
																<li><a href="#">9</a></li>
																<li><a href="#">10</a></li>
																<li><a href="#">11</a></li>
																<li><a href="#">12</a></li>
																<li><a href="#">13</a></li>
																<li><a href="#">14</a></li>
																<li><a href="#">15</a></li>
																<li><a href="#">16</a></li>
																<li><a href="#">17</a></li>
																<li><a href="#">18</a></li>
																<li><a href="#">19</a></li>
																<li><a href="#">20</a></li>
																<li><a href="#">21</a></li>
																<li><a href="#">22</a></li>
																<li><a href="#">23</a></li>
																<li><a href="#">24</a></li>
																<li><a href="#">25</a></li>
																<li><a href="#">26</a></li>
																<li><a href="#">27</a></li>
																<li><a href="#">28</a></li>
																<li><a href="#">29</a></li>
																<li><a href="#">30</a></li>
																<li><a href="#">31</a></li>
																<li><a href="#"></a></li>
																<li><a href="#"></a></li>
																<li><a href="#"></a></li>
																<li><a href="#"></a></li>
																<li><a href="#"></a></li>
															</ul>
														</div>
													</div>
													<div class="cols">
														<h5>Outbound flight</h5>
														<div class="row">
															<input type="text" class="input1" value="03.05.2011"  onblur="if(this.value=='') this.value='03.05.2011'" onFocus="if(this.value =='03.05.2011' ) this.value=''">
															<input type="text" class="input1" value="+/- 0 Days"  onblur="if(this.value=='') this.value='+/- 0 Days'" onFocus="if(this.value =='+/- 0 Days' ) this.value=''">
														</div>
														<div class="marg_top1">
															<div class="select1">
															<a href="#" class="marker_left"></a>
															<select><option>May 11</option><option>June 11</option><option>July 11</option></select>
															<a href="#" class="marker_right"></a>
															</div>
														</div>
														<div class="calendar">
															<ul class="thead">
																<li>Mon</li>
																<li>Tue</li>
																<li>Wed</li>
																<li>Thu</li>
																<li>Fri</li>
																<li>Sat</li>
																<li>Sun</li>
															</ul>
															<ul class="tbody">
																<li><a href="#"></a></li>
																<li><a href="#"></a></li>
																<li><a href="#"></a></li>
																<li><a href="#"></a></li>
																<li><a href="#"></a></li>
																<li><a href="#"></a></li>
																<li><a href="#">1</a></li>
																<li><a href="#">2</a></li>
																<li><a href="#">3</a></li>
																<li><a href="#">4</a></li>
																<li><a href="#" class="active">5</a></li>
																<li><a href="#">6</a></li>
																<li><a href="#">7</a></li>
																<li><a href="#">8</a></li>
																<li><a href="#">9</a></li>
																<li><a href="#">10</a></li>
																<li><a href="#">11</a></li>
																<li><a href="#">12</a></li>
																<li><a href="#">13</a></li>
																<li><a href="#">14</a></li>
																<li><a href="#">15</a></li>
																<li><a href="#">16</a></li>
																<li><a href="#">17</a></li>
																<li><a href="#">18</a></li>
																<li><a href="#">19</a></li>
																<li><a href="#">20</a></li>
																<li><a href="#">21</a></li>
																<li><a href="#">22</a></li>
																<li><a href="#">23</a></li>
																<li><a href="#">24</a></li>
																<li><a href="#">25</a></li>
																<li><a href="#">26</a></li>
																<li><a href="#">27</a></li>
																<li><a href="#">28</a></li>
																<li><a href="#">29</a></li>
																<li><a href="#">30</a></li>
																<li><a href="#">31</a></li>
																<li><a href="#"></a></li>
																<li><a href="#"></a></li>
																<li><a href="#"></a></li>
																<li><a href="#"></a></li>
																<li><a href="#"></a></li>
															</ul>
														</div>
													</div>
												</div>
												<div class="wrapper pad_bot1">
													<span class="left">Passengers</span>
													<div class="cols marg_right1">
														<div class="row">
															<input type="text" class="input2" value="2"  onblur="if(this.value=='') this.value='2'" onFocus="if(this.value =='2' ) this.value=''">
															<span class="left">Adults</span>
															<a href="#" class="help"></a>
														</div>
														<div class="row">
															<input type="text" class="input2" value="0"  onblur="if(this.value=='') this.value='0'" onFocus="if(this.value =='0' ) this.value=''">
															<span class="left">Children</span>
															<a href="#" class="help"></a>
														</div>
													</div>
													<div class="cols">
														<div class="select1"><span class="left">Class</span><select><option>Economy</option></select><a href="#" class="help"></a></div>
														<div class="select1"><span class="left">Airline</span><select><option>Airlines</option></select><a href="#" class="help"></a></div>
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
														<div class="row"><span class="left">From</span><input type="text" class="input"><a href="#" class="help"></a></div>
														<div class="row"><span class="left">To</span><input type="text" class="input"><a href="#" class="help"></a></div>
													</div>
													<div class="check_box"><input type="checkbox"><span>One way</span><a href="#" class="help"></a></div>
													<div class="check_box"><input type="checkbox"><span>Direct flights</span></div>
												</div>
												<div class="wrapper under">
													<span class="left">Flights</span>
													<div class="cols marg_right1">
														<h6>Outbound flight</h6>
														<div class="row">
															<input type="text" class="input1" value="03.05.2011"  onblur="if(this.value=='') this.value='03.05.2011'" onFocus="if(this.value =='03.05.2011' ) this.value=''">
															<input type="text" class="input1" value="+/- 0 Days"  onblur="if(this.value=='') this.value='+/- 0 Days'" onFocus="if(this.value =='+/- 0 Days' ) this.value=''">
														</div>
														<div class="marg_top1">
															<div class="select1">
															<a href="#" class="marker_left"></a>
															<select><option>May 11</option><option>June 11</option><option>July 11</option></select>
															<a href="#" class="marker_right"></a>
															</div>
														</div>
														<div class="calendar">
															<ul class="thead">
																<li>Mon</li>
																<li>Tue</li>
																<li>Wed</li>
																<li>Thu</li>
																<li>Fri</li>
																<li>Sat</li>
																<li>Sun</li>
															</ul>
															<ul class="tbody">
																<li><a href="#"></a></li>
																<li><a href="#"></a></li>
																<li><a href="#"></a></li>
																<li><a href="#"></a></li>
																<li><a href="#"></a></li>
																<li><a href="#"></a></li>
																<li><a href="#">1</a></li>
																<li><a href="#">2</a></li>
																<li><a href="#">3</a></li>
																<li><a href="#">4</a></li>
																<li><a href="#" class="active">5</a></li>
																<li><a href="#">6</a></li>
																<li><a href="#">7</a></li>
																<li><a href="#">8</a></li>
																<li><a href="#">9</a></li>
																<li><a href="#">10</a></li>
																<li><a href="#">11</a></li>
																<li><a href="#">12</a></li>
																<li><a href="#">13</a></li>
																<li><a href="#">14</a></li>
																<li><a href="#">15</a></li>
																<li><a href="#">16</a></li>
																<li><a href="#">17</a></li>
																<li><a href="#">18</a></li>
																<li><a href="#">19</a></li>
																<li><a href="#">20</a></li>
																<li><a href="#">21</a></li>
																<li><a href="#">22</a></li>
																<li><a href="#">23</a></li>
																<li><a href="#">24</a></li>
																<li><a href="#">25</a></li>
																<li><a href="#">26</a></li>
																<li><a href="#">27</a></li>
																<li><a href="#">28</a></li>
																<li><a href="#">29</a></li>
																<li><a href="#">30</a></li>
																<li><a href="#">31</a></li>
																<li><a href="#"></a></li>
																<li><a href="#"></a></li>
																<li><a href="#"></a></li>
																<li><a href="#"></a></li>
																<li><a href="#"></a></li>
															</ul>
														</div>
													</div>
													<div class="cols">
														<h5>Outbound flight</h5>
														<div class="row">
															<input type="text" class="input1" value="03.05.2011"  onblur="if(this.value=='') this.value='03.05.2011'" onFocus="if(this.value =='03.05.2011' ) this.value=''">
															<input type="text" class="input1" value="+/- 0 Days"  onblur="if(this.value=='') this.value='+/- 0 Days'" onFocus="if(this.value =='+/- 0 Days' ) this.value=''">
														</div>
														<div class="marg_top1">
															<div class="select1">
															<a href="#" class="marker_left"></a>
															<select><option>May 11</option><option>June 11</option><option>July 11</option></select>
															<a href="#" class="marker_right"></a>
															</div>
														</div>
														<div class="calendar">
															<ul class="thead">
																<li>Mon</li>
																<li>Tue</li>
																<li>Wed</li>
																<li>Thu</li>
																<li>Fri</li>
																<li>Sat</li>
																<li>Sun</li>
															</ul>
															<ul class="tbody">
																<li><a href="#"></a></li>
																<li><a href="#"></a></li>
																<li><a href="#"></a></li>
																<li><a href="#"></a></li>
																<li><a href="#"></a></li>
																<li><a href="#"></a></li>
																<li><a href="#">1</a></li>
																<li><a href="#">2</a></li>
																<li><a href="#">3</a></li>
																<li><a href="#">4</a></li>
																<li><a href="#" class="active">5</a></li>
																<li><a href="#">6</a></li>
																<li><a href="#">7</a></li>
																<li><a href="#">8</a></li>
																<li><a href="#">9</a></li>
																<li><a href="#">10</a></li>
																<li><a href="#">11</a></li>
																<li><a href="#">12</a></li>
																<li><a href="#">13</a></li>
																<li><a href="#">14</a></li>
																<li><a href="#">15</a></li>
																<li><a href="#">16</a></li>
																<li><a href="#">17</a></li>
																<li><a href="#">18</a></li>
																<li><a href="#">19</a></li>
																<li><a href="#">20</a></li>
																<li><a href="#">21</a></li>
																<li><a href="#">22</a></li>
																<li><a href="#">23</a></li>
																<li><a href="#">24</a></li>
																<li><a href="#">25</a></li>
																<li><a href="#">26</a></li>
																<li><a href="#">27</a></li>
																<li><a href="#">28</a></li>
																<li><a href="#">29</a></li>
																<li><a href="#">30</a></li>
																<li><a href="#">31</a></li>
																<li><a href="#"></a></li>
																<li><a href="#"></a></li>
																<li><a href="#"></a></li>
																<li><a href="#"></a></li>
																<li><a href="#"></a></li>
															</ul>
														</div>
													</div>
												</div>
												<div class="wrapper pad_bot1">
													<span class="left">Passengers</span>
													<div class="cols marg_right1">
														<div class="row">
															<input type="text" class="input2" value="2"  onblur="if(this.value=='') this.value='2'" onFocus="if(this.value =='2' ) this.value=''">
															<span class="left">Adults</span>
															<a href="#" class="help"></a>
														</div>
														<div class="row">
															<input type="text" class="input2" value="0"  onblur="if(this.value=='') this.value='0'" onFocus="if(this.value =='0' ) this.value=''">
															<span class="left">Children</span>
															<a href="#" class="help"></a>
														</div>
													</div>
													<div class="cols">
														<div class="select1"><span class="left">Class</span><select><option>Economy</option></select>
															<a href="#" class="help"></a>
														</div>
														<div class="select1"><span class="left">Airline</span><select><option>Airlines</option></select>
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