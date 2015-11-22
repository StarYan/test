<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>iCart | Ecommerce HTML Template</title>
		<link href="<?php echo base_url();?>css/style.css" rel="stylesheet">
		<link href="<?php echo base_url();?>css/master.css" rel="stylesheet">
		<link href="<?php echo base_url();?>css/header.css" rel="stylesheet">
		<link href="<?php echo base_url();?>css/icon-menu.css" rel="stylesheet">

		
		<link rel="alternate stylesheet" type="text/css" href="<?php echo base_url();?>plugins/switcher/css/color3.css" title="color3" media="all" />
		

		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

	</head>

	<body class="animated-css" data-scrolling-animations="false">
		<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content login">
					<h2>用&nbsp;&nbsp;户&nbsp;&nbsp;登&nbsp;&nbsp;录</h2>
					<form class="form-signin col-md-6 col-md-offset-3" role="form" method="post" action="<?php echo site_url('/appointment_controller/StudentLogin')?>">
						<div class="form-signin">
							<label class="sr-only" for="Username"></label>
							<input type="text" class="form-control" id="Username" name="Username" maxlength="50" placeholder="用户账号" value="">
							<label class="sr-only" for="pass"></label>
							<input type="password" class="form-control" id="pass" name="pass" maxlength="20" placeholder="用户密码" value="" data-toggle="fixed-tooltip">
						</div>
						<br>
						<button class="btn btn-success btn-block" type="submit" name="commandLogin" value="1" style="margin-bottom: 40%; ">登&nbsp;&nbsp;&nbsp;&nbsp;录</button>
					</form>
				</div>
			</div>
		</div>
		<div class="sp-body">

			<!-- Loader Landing Page -->
			<div id="loader">
				<div class="loader"></div>
			</div>
			<!-- Loader end -->

			<header id="header">
				<div class="header-top">
					<div class="container">
						<ul class="nav nav-pills nav-top navbar-right">

							<?php if(!empty($status)){ ?>
								<li class="dropdown my-account">
								<a  class=" font-additional font-weight-normal text-uppercase before-bg"  style="font-size: 0.9em; margin-top: 3%; color:#009c67;">欢迎您，<?php echo $list[0]->studentname ?></a>
								</li>
								<li class="dropdown my-account">
									<a href="<?php echo site_url('/appointment_controller/appointment')?>" class="btn font-additional font-weight-normal text-uppercase before-bg hvr-bounce-to-right"  style="font-size: 0.9em; margin: auto;">退&nbsp;&nbsp;出</a>
								</li>
							<?php }else{ ?>
								<li class="dropdown my-account">
									<a href="#" class="btn font-additional font-weight-normal text-uppercase before-bg hvr-bounce-to-right" rel="nofollow" data-toggle="modal" data-target="#login" style="font-size: 0.9em; margin: auto;">登&nbsp;&nbsp;录</a>
								</li>
							<?php } ?>


						</ul>
					</div>
					<div class="container-fluid trigger-container">
						<div class="row text-center">
							<button class="menu-trigger"><i class="fa fa-bars"></i></button>
						</div>
					</div>
				</div>
				<div class="header-middle">
					<div class="container relative">
						<a href="index.html" class="logo pull-left"></a>
						<div class="header-search pull-right">
							<div class="header-search_filter">
								<select class="formDropdown font-additional font-weight-normal" name="filterby" id="filterby">
									<option value="0">选择搜索类型</option>
									<option value="date">教练</option>
									<option value="title">训练车型</option>
									<option value="cat">训练场地</option>
								</select>
								<i class="fa fa-angle-down customColor"></i>
							</div>
							<div class="header-search_form">
								<form class="product-search form-inline" action="#" method="POST">
									<div class="form-group">
										<label class="sr-only" for="searchQuery">Product Name ...</label>
										<input type="search" class="product-search_field font-main font-weight-normal" id="searchQuery" placeholder="Product Name ...">
									</div>
									<button type="submit" class="product-search_btn hvr-bounce-to-right">
										<i class="fa fa-search"></i>
									</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</header>



			<section id="categories">
				<div class="container clearfix">
					<ul class="category-images">

						<li class="grid">
							<figure class="effect-ruby wow fadeIn" data-wow-delay="0.6s" data-wow-duration="2s">
								<img src="<?php echo base_url();?>images/products/3.jpg" alt="Category">
								<figcaption>
									<div class="category-images_content">
										<p class="bottom-text font-additional font-weight-bold text-uppercase color-main customBgColor">查看详细信息</p>
										<h2 class="font-additional font-weight-bold text-uppercase color-main customBgColor">训练场地预约</h2>
									</div>
									<a href="#" id="place">View more</a>
								</figcaption>
							</figure>
						</li>
						<li class="grid left-space right-space">
							<figure class="effect-ruby wow fadeIn" data-wow-delay="0.3s" data-wow-duration="2s">
								<img src="<?php echo base_url();?>images/products/1.jpg" alt="product">
								<figcaption>
									<div class="category-images_content">
										<p class="bottom-text font-additional font-weight-bold text-uppercase color-main customBgColor">查看详细信息</p>
										<h2 class="font-additional font-weight-bold text-uppercase color-main customBgColor">教练预约</h2>
									</div>
									<a href="#" id="teacher">View more</a>
								</figcaption>
							</figure>
						</li>
						<li class="grid ">
							<figure class="effect-ruby wow fadeIn" data-wow-delay="0.6s" data-wow-duration="2s">
								<img src="<?php echo base_url();?>images/products/2.jpg" alt="Category">
								<figcaption>
									<div class="category-images_content">
										<p class="bottom-text font-additional font-weight-bold text-uppercase color-main customBgColor">查看详细信息</p>
										<h2 class="font-additional font-weight-bold text-uppercase color-main customBgColor">训练车型预约</h2>
									</div>
									<a href="#" id="car-type">View more</a>
								</figcaption>
							</figure>
						</li>

					</ul>
				</div>
			</section>


			<section id="previewInfo">
				<a id="p"></a>
				<div class="container relative blog-preview">
					<div class="row">
						<h2 class="title font-additional font-weight-bold text-uppercase wow fadeInUp" data-wow-delay="0.3s">训练场地预约</h2>
						<span class="subTitle font-additional font-weight-normal text-uppercase wow fadeIn" data-wow-delay="0.3s" data-wow-duration="2s"></span>
						<div class="line-separatorBox text-center clearfix">
							<div class="line-separator text-center animated" style="visibility: visible; margin-top:15px; margin-bottom:30px;">
								<img src="<?php echo base_url();?>images/seperator.png" alt="seperator">
							</div>
						</div>
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clearfix blog-outer-container">
							<div class="col-lg-6 col-md-6 col-sm-12 blog-preview_item wow fadeIn" data-wow-delay="0.3s" data-wow-duration="2s">
								<a href="#" class="blog-preview_image">
									<img src="<?php echo base_url();?>images/blog-img-1.jpg" alt="Blog Post">
								</a>
								<div class="blog-preview_info">
									<h4 class="blog-preview_title font-additional font-weight-bold text-uppercase">场地信息介绍</h4>
									<div class="blog-preview_desc font-main font-weight-normal">Proin est elentesque risus magna vulputate vitae sodales uam morbi non sem lacus porta mollis nunc condime.</div>
									<a class="blog-preview_btn button-border font-additional font-weight-normal before-bg text-uppercase hvr-bounce-to-right" href="blog-post.html">预&nbsp;&nbsp;&nbsp;&nbsp;约</a>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-12 blog-preview_item wow fadeIn" data-wow-delay="0.3s" data-wow-duration="2s">
								<a href="#" class="blog-preview_image">
									<img src="<?php echo base_url();?>images/blog-img-2.jpg" alt="Blog Post">
								</a>
								<div class="blog-preview_info">
									<h4 class="blog-preview_title font-additional font-weight-bold text-uppercase">PRAESENT LOREM PELLENTESQUE</h4>
									<div class="blog-preview_desc font-main font-weight-normal">Proin est elentesque risus magna vulputate vitae sodales uam morbi non sem lacus porta mollis nunc condime.</div>
									<a class="blog-preview_btn button-border font-additional font-weight-normal before-bg text-uppercase hvr-bounce-to-right" href="blog-post.html">预&nbsp;&nbsp;&nbsp;&nbsp;约</a>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-12 blog-preview_item wow fadeIn" data-wow-delay="0.3s" data-wow-duration="2s">
								<a href="#" class="blog-preview_image">
									<img src="<?php echo base_url();?>images/blog-img-3.jpg" alt="Blog Post">
								</a>
								<div class="blog-preview_info">
									<h4 class="blog-preview_title font-additional font-weight-bold text-uppercase">AENEAN NISL VITAE IPSUM LOBORTIS</h4>
									<div class="blog-preview_desc font-main font-weight-normal">Proin est elentesque risus magna vulputate vitae sodales uam morbi non sem lacus porta mollis nunc condime.</div>
									<a class="blog-preview_btn button-border font-additional font-weight-normal before-bg text-uppercase hvr-bounce-to-right" href="blog-post.html">预&nbsp;&nbsp;&nbsp;&nbsp;约</a>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-12 blog-preview_item wow fadeIn" data-wow-delay="0.3s" data-wow-duration="2s">
								<a href="#" class="blog-preview_image">
									<img src="<?php echo base_url();?>images/blog-img-4.jpg" alt="Blog Post">
								</a>
								<div class="blog-preview_info">
									<h4 class="blog-preview_title font-additional font-weight-bold text-uppercase">AENEAN NISL VITAE IPSUM LOBORTIS</h4>
									<div class="blog-preview_desc font-main font-weight-normal">Proin est elentesque risus magna vulputate vitae sodales uam morbi non sem lacus porta mollis nunc condime.</div>
									<a class="blog-preview_btn button-border font-additional font-weight-normal before-bg text-uppercase hvr-bounce-to-right" href="blog-post.html">预&nbsp;&nbsp;&nbsp;&nbsp;约</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>


			<section id="collection" class="borderTopSeparator">
				<a id="t"></a>
				<div class="container relative">

					<div class="isotopeBox">
						<h2 class="title font-additional font-weight-bold text-uppercase wow fadeInUp" data-wow-duration="2s">教练预约</h2>
						<span class="subTitle font-additional font-weight-normal text-uppercase wow fadeIn" data-wow-duration="2s"></span>
						<div class="line-seperatorBox clearfix">
							<div class="line-seperator">
								<img src="<?php echo base_url();?>images/seperator.png" alt="seperator">
							</div>
							<ul id="filter" class="product-filter clearfix">
								<li>
									<a href="#" class="current btn font-additional font-weight-normal text-uppercase before-bg hvr-bounce-to-right" data-filter=".time1">08:00~10:00</a>
								</li>
								<li>
									<a href="#" class="btn font-additional font-weight-normal text-uppercase before-bg hvr-bounce-to-right" data-filter=".time2">10:00~12:00</a>
								</li>
								<li>
									<a href="#" class="btn font-additional font-weight-normal text-uppercase before-bg hvr-bounce-to-right" data-filter=".time3">13:00~15:00</a>
								</li>
								<li>
									<a href="#" class="btn font-additional font-weight-normal text-uppercase before-bg hvr-bounce-to-right" data-filter=".time4">15:00~17:00</a>
								</li>
								<li>
									<a href="#" class="btn font-additional font-weight-normal text-uppercase before-bg hvr-bounce-to-right" data-filter=".time5">19:00~21:00</a>
								</li>
							</ul>
							<div class="isotope-frame">
								<div class="isotope-filter">
									<div class="isotope-item  time1">
										<div class="product-item hvr-underline-from-center">
											<div class="product-item_body">
												<img class="product-item_image" src="<?php echo base_url();?>images/products/4.jpg" alt="Product">
												<div class="product-sidebar" style="height:15%;">
													<a href="#" class="info" >
														<span>预约</span>
													</a>
												</div>
											</div>

											<a href="#" class="product-item_footer">
												<div class="product-item_title font-additional font-weight-bold text-center text-uppercase">教练名字</div>
												<div class="product-item_price font-additional font-weight-normal customColor">100/小时</div>
												<div class="rating">
												<div class="ratings">
													<div class="rating-box" style="margin-top:5%;">
														<div class="rating" style="width:100%;"></div>
													</div>
												</div>
											</div>
											</a>

										</div>
									</div>
									<div class="isotope-item time1">
										<div class="product-item hvr-underline-from-center">
											<div class="product-item_body">
												<img class="product-item_image" src="<?php echo base_url();?>images/products/5.jpg" alt="Product">
												<div class="product-sidebar" style="height:15%;">
													<a href="#" class="info" >
														<span>预约</span>
													</a>
												</div>
											</div>

											<a href="#" class="product-item_footer">
												<div class="product-item_title font-additional font-weight-bold text-center text-uppercase">BLACK DRESS</div>
												<div class="product-item_price font-additional font-weight-normal customColor">$560.00</div>
											</a>
										</div>
									</div>
									<div class="isotope-item  time1">
										<div class="product-item hvr-underline-from-center">
											<div class="product-item_body">
												<img class="product-item_image" src="<?php echo base_url();?>images/products/6.jpg" alt="Product">
												<a class="product-item_link" href="#"></a>
												<div class="product-sidebar" style="height:15%;">
													<a href="#" class="info" >
														<span>预约</span>
													</a>
												</div>
											</div>
											<a href="#" class="product-item_footer">
												<div class="product-item_title font-additional font-weight-bold text-center text-uppercase">STYLISH WEAR</div>
												<div class="product-item_price font-additional font-weight-normal customColor">$175.00</div>
											</a>
										</div>
									</div>
									<div class="isotope-item  time2">
										<div class="product-item hvr-underline-from-center">
											<div class="product-item_body">
												<img class="product-item_image" src="<?php echo base_url();?>images/products/7.jpg" alt="Product">
												<div class="product-sidebar" style="height:15%;">
													<a href="#" class="info" >
														<span>预约</span>
													</a>
												</div>
											</div>
											<a href="#" class="product-item_footer">
												<div class="product-item_title font-additional font-weight-bold text-center text-uppercase">LEATHER JACKET</div>
												<div class="product-item_price font-additional font-weight-normal customColor">$300.00</div>
											</a>
										</div>
									</div>
									<div class="isotope-item  time2">
										<div class="product-item hvr-underline-from-center">
											<div class="product-item_body">
												<img class="product-item_image" src="<?php echo base_url();?>images/products/8.jpg" alt="Product">
												<div class="product-sidebar" style="height:15%;">
													<a href="#" class="info" >
														<span>预约</span>
													</a>
												</div>
											</div>
											<a href="#" class="product-item_footer">
												<div class="product-item_title font-additional font-weight-bold text-center text-uppercase">GRAY COAT</div>
												<div class="product-item_price font-additional font-weight-normal customColor">$240.00 <span>$250.00</span></div>
											</a>
										</div>
									</div>
									<div class="isotope-item  time3">
										<div class="product-item hvr-underline-from-center">
											<div class="product-item_body">
												<img class="product-item_image" src="<?php echo base_url();?>images/products/9.jpg" alt="Product">
												<div class="product-sidebar" style="height:15%;">
													<a href="#" class="info" >
														<span>预约</span>
													</a>
												</div>
											</div>
											<a href="#" class="product-item_footer">
												<div class="product-item_title font-additional font-weight-bold text-center text-uppercase">MEN COAT</div>
												<div class="product-item_price font-additional font-weight-normal customColor">$500.00</div>
											</a>
										</div>
									</div>
									<div class="isotope-item  time4">
										<div class="product-item hvr-underline-from-center">
											<div class="product-item_body">
												<img class="product-item_image" src="<?php echo base_url();?>images/products/10.jpg" alt="Product">
												<a class="product-item_link" href="#"></a>
												<div class="product-sidebar" style="height:15%;">
													<a href="#" class="info" >
														<span>预约</span>
													</a>
												</div>
											</div>
											<a href="#" class="product-item_footer">
												<div class="product-item_title font-additional font-weight-bold text-center text-uppercase">STYLISH WEAR</div>
												<div class="product-item_price font-additional font-weight-normal customColor">$175.00</div>
											</a>
										</div>
									</div>
									<div class="isotope-item time5">
										<div class="product-item hvr-underline-from-center">
											<div class="product-item_body">
												<img class="product-item_image" src="<?php echo base_url();?>images/products/11.jpg" alt="Product">

												<div class="product-sidebar" style="height:15%;">
													<a href="#" class="info" >
														<span>预约</span>
													</a>
												</div>
											</div>
											<a href="#" class="product-item_footer">
												<div class="product-item_title font-additional font-weight-bold text-center text-uppercase">WOMEN DRESS</div>
												<div class="product-item_price font-additional font-weight-normal customColor">$150.00</div>
											</a>
										</div>
									</div>
									<div class="isotope-item  time3">
										<div class="product-item hvr-underline-from-center">
											<div class="product-item_body">
												<img class="product-item_image" src="<?php echo base_url();?>images/products/8.jpg" alt="Product">
												<div class="product-sidebar" style="height:15%;">
													<a href="#" class="info" >
														<span>预约</span>
													</a>
												</div>
											</div>
											<a href="#" class="product-item_footer">
												<div class="product-item_title font-additional font-weight-bold text-center text-uppercase">GRAY COAT</div>
												<div class="product-item_price font-additional font-weight-normal customColor">$260.00 <span>$220.00</span></div>
											</a>
										</div>
									</div>
									<div class="isotope-item  time5">
										<div class="product-item hvr-underline-from-center">
											<div class="product-item_body">
												<img class="product-item_image" src="<?php echo base_url();?>images/products/9.jpg" alt="Product">
												<div class="product-sidebar" style="height:15%;">
													<a href="#" class="info" >
														<span>预约</span>
													</a>
												</div>
											</div>
											<a href="#" class="product-item_footer">
												<div class="product-item_title font-additional font-weight-bold text-center text-uppercase">MEN COAT</div>
												<div class="product-item_price font-additional font-weight-normal customColor">$460.00</div>
											</a>
										</div>
									</div>
									<div class="isotope-item time4">
										<div class="product-item hvr-underline-from-center">
											<div class="product-item_body">
												<img class="product-item_image" src="<?php echo base_url();?>images/products/10.jpg" alt="Product">
												<a class="product-item_link" href="#"></a>
												<div class="product-sidebar" style="height:15%;">
													<a href="#" class="info" >
														<span>预约</span>
													</a>
												</div>
											</div>
											<a href="#" class="product-item_footer">
												<div class="product-item_title font-additional font-weight-bold text-center text-uppercase">STYLISH WEAR</div>
												<div class="product-item_price font-additional font-weight-normal customColor">$175.00</div>
											</a>
										</div>
									</div>
									<div class="isotope-item time5">
										<div class="product-item hvr-underline-from-center">
											<div class="product-item_body">
												<img class="product-item_image" src="<?php echo base_url();?>images/products/11.jpg" alt="Product">
												<div class="product-sidebar" style="height:15%;">
													<a href="#" class="info" >
														<span>预约</span>
													</a>
												</div>
											</div>
											<a href="#" class="product-item_footer">
												<div class="product-item_title font-additional font-weight-bold text-center text-uppercase">WOMEN DRESS</div>
												<div class="product-item_price font-additional font-weight-normal customColor">$200.00</div>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section id="slider" class="previewInfo">
				<a id="ct"></a>
				<div class="container">
					<div class="row">
						<h2 class="title font-additional font-weight-bold text-uppercase wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="2s">训练车型预约</h2>
						<span class="subTitle font-additional font-weight-normal text-uppercase wow fadeIn" data-wow-duration="2s"></span>
						<div class="line-separatorBox text-center">
							<div class="line-separator animated" style="visibility: visible; margin-top:15px; margin-bottom:30px;">
								<img src="<?php echo base_url();?>images/seperator.png" alt="seperator">
							</div>
						</div>
						<div id="owl-product-slider" class="enable-owl-carousel owl-product-slider owl-bottom-pagination owl-carousel owl-theme" data-navigation="true" data-pagination="false" data-single-item="false" data-auto-play="false" data-transition-style="false" data-main-text-animation="false"
						data-min600="2" data-min800="3" data-min1200="4">
							<div class="item">
								<div class="product-item hvr-underline-from-center">
									<div class="product-item_body product-border">
										<img alt="Product" src="<?php echo base_url();?>images/products/12.jpg" class="product-item_image">
										<div class="product-sidebar" style="height:15%;">
											<a href="#" class="info" >
												<span>预约</span>
											</a>
										</div>
									</div>
									<a class="product-item_footer" href="product-details.html">
										<div class="product-item_title font-additional font-weight-bold text-center text-uppercase">训练的车型</div>
										<div class="product-item_price font-additional font-weight-normal customColor">训练车的车牌号码</div>
									</a>
								</div>
							</div>
							<div class="item">
								<div class="product-item hvr-underline-from-center">
									<div class="product-item_body product-border">
										<img alt="Product" src="<?php echo base_url();?>images/products/13.jpg" class="product-item_image">
										<div class="product-sidebar" style="height:15%;">
											<a href="#" class="info" >
												<span>预约</span>
											</a>
										</div>
									</div>
									<a class="product-item_footer" href="product-details.html">
										<div class="product-item_title font-additional font-weight-bold text-center text-uppercase">SHOES</div>
										<div class="product-item_price font-additional font-weight-normal customColor">$260.00 <span>$300.00</span></div>
									</a>
								</div>
							</div>
							<div class="item">
								<div class="product-item hvr-underline-from-center">
									<div class="product-item_body product-border">
										<img alt="Product" src="<?php echo base_url();?>images/products/14.jpg" class="product-item_image">
										<div class="product-sidebar" style="height:15%;">
											<a href="#" class="info" >
												<span>预约</span>
											</a>
										</div>
									</div>
									<a class="product-item_footer" href="#">
										<div class="product-item_title font-additional font-weight-bold text-center text-uppercase">SPORTS SHOES</div>
										<div class="product-item_price font-additional font-weight-normal customColor">$175.00</div>
									</a>
								</div>
							</div>
							<div class="item">
								<div class="product-item hvr-underline-from-center">
									<div class="product-item_body product-border">
										<img alt="Product" src="<?php echo base_url();?>images/products/15.jpg" class="product-item_image">
										<div class="product-sidebar" style="height:15%;">
											<a href="#" class="info" >
												<span>预约</span>
											</a>
										</div>
									</div>
									<a class="product-item_footer" href="product-details.html">
										<div class="product-item_title font-additional font-weight-bold text-center text-uppercase">LEATHER JACKET</div>
										<div class="product-item_price font-additional font-weight-normal customColor">$300.00</div>
									</a>
								</div>
							</div>
							<div class="item">
								<div class="product-item hvr-underline-from-center">
									<div class="product-item_body product-border">
										<img alt="Product" src="<?php echo base_url();?>images/products/16.jpg" class="product-item_image">
										<div class="product-sidebar" style="height:15%;">
											<a href="#" class="info" >
												<span>预约</span>
											</a>
										</div>
									</div>
									<a class="product-item_footer" href="product-details.html">
										<div class="product-item_title font-additional font-weight-bold text-center text-uppercase">TRAVEL BAG</div>
										<div class="product-item_price font-additional font-weight-normal customColor">$175.00</div>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>



			<section id="brands" style="margin-top:2%;">
				<div class="container">
					<div class="row">
						<ul class="brands-list">
							<li>
								<a href="#" class="brand-item">
									<img src="<?php echo base_url();?>images/brand-img-1.jpg" alt="Brand">
								</a>
							</li>
							<li>
								<a href="#" class="brand-item">
									<img src="<?php echo base_url();?>images/brand-img-2.jpg" alt="Brand">
								</a>
							</li>
							<li>
								<a href="#" class="brand-item">
									<img src="<?php echo base_url();?>images/brand-img-3.jpg" alt="Brand">
								</a>
							</li>
							<li>
								<a href="#" class="brand-item">
									<img src="<?php echo base_url();?>images/brand-img-4.jpg" alt="Brand">
								</a>
							</li>
							<li>
								<a href="#" class="brand-item">
									<img src="<?php echo base_url();?>images/brand-img-5.jpg" alt="Brand">
								</a>
							</li>
							<li>
								<a href="#" class="brand-item">
									<img src="<?php echo base_url();?>images/brand-img-6.jpg" alt="Brand">
								</a>
							</li>
						</ul>
					</div>
				</div>
			</section>

			<section id="subscribe" class="subscribe-row">
				<div class="container">
					<div class="subscribe-container clearfix wow fadeInUp text-center" data-wow-delay="0.3s">
						<div class="col-sm-12 subscribe-desc font-additional font-weight-bold">SIGN UP FOR OUR MONTHLY NEWSLETTER</div>
						<div id="mc_embed_signup" class="col-sm-9 col-sm-offset-3 subscribe-form">
							<form action="#" method="post">
								<div id="mc_embed_signup_scroll">
									<div class="mc-field-group subscribe-field">
										<input type="email" value="" name="sub-email" class="required email font-main color-third" id="sub-email" required>
									</div>
									<div class="subscribe-button">
										<button type="submit" value="Subscribe" name="subscribe" class="btn btn-primary font-additional hvr-bounce-to-right before-bg"> SUBSCRIBE </button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</section>

			<footer id="footer">
				<a class="goToTop font-additional color-main text-uppercase" href="#" id="scrollTop">
					<i class="fa fa-angle-up"></i>
					<span>Top</span>
				</a>
				<div class="footer-top">
					<div class="container">
						<div class="row">
							<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 clearfix wow fadeIn" data-wow-delay="0.3s" data-wow-duration="2s">
								<a href="index.html" class="footer-top_logo"></a>
								<div class="footer-top_container clearfix">
									<span class="font-main font-weight-normal color-additional">Proin est Pellentesque risus magna vulput vitae sodales uam morbi non sem lacus por mollis. Nunc condime ntum metus eud Ino lestie. Sed consectetuer. Lorem ipsum dolor amet ectetur adipisicing elit sed doincl.</span>
									<ul class="footer-social-list">
										<li><a href="#"><span class="social_facebook" aria-hidden="true"></span></a></li>
										<li><a href="#"><span class="social_twitter" aria-hidden="true"></span></a></li>
										<li><a href="#"><span class="social_googleplus" aria-hidden="true"></span></a></li>
										<li><a href="#"><span class="social_pinterest" aria-hidden="true"></span></a></li>
										<li><a href="#"><span class="social_youtube" aria-hidden="true"></span></a></li>
										<li><a href="#"><span class="social_instagram" aria-hidden="true"></span></a></li>
									</ul>
								</div>
							</div>
							<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 clearfix wow fadeIn" data-wow-delay="0.6s" data-wow-duration="2s">
								<h4><span class="footer-top_title color-main font-additional font-weight-bold text-uppercase">QUICK LINKS</span></h4>
								<div class="footer-top_container clearfix">
									<ul class="footer-nav">
										<li><a href="#" class="font-main font-weight-normal color-additional"><i class="fa fa-caret-right customColor"></i> My Account</a></li>
										<li><a href="#" class="font-main font-weight-normal color-additional"><i class="fa fa-caret-right customColor"></i> My Wishlist</a></li>
										<li><a href="#" class="font-main font-weight-normal color-additional"><i class="fa fa-caret-right customColor"></i> Order Tracking</a></li>
										<li><a href="#" class="font-main font-weight-normal color-additional"><i class="fa fa-caret-right customColor"></i> Order History</a></li>
										<li><a href="#" class="font-main font-weight-normal color-additional"><i class="fa fa-caret-right customColor"></i> Shipping Information</a></li>
									</ul>
								</div>
							</div>
							<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 clearfix wow fadeIn" data-wow-delay="0.9s" data-wow-duration="2s">
								<h4><span class="footer-top_title color-main font-additional font-weight-bold text-uppercase">INFORMATION</span></h4>
								<div class="footer-top_container clearfix">
									<ul class="footer-nav">
										<li><a href="#" class="font-main font-weight-normal color-additional"><i class="fa fa-caret-right customColor"></i> About us</a></li>
										<li><a href="#" class="font-main font-weight-normal color-additional"><i class="fa fa-caret-right customColor"></i> Contact us</a></li>
										<li><a href="#" class="font-main font-weight-normal color-additional"><i class="fa fa-caret-right customColor"></i> Privacy Policy</a></li>
										<li><a href="#" class="font-main font-weight-normal color-additional"><i class="fa fa-caret-right customColor"></i> Terms &amp; Conditions</a></li>
										<li><a href="#" class="font-main font-weight-normal color-additional"><i class="fa fa-caret-right customColor"></i> Return Policy</a></li>
									</ul>
								</div>
							</div>
							<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 clearfix wow fadeIn" data-wow-delay="1.2s" data-wow-duration="2s">
								<h4><span class="footer-top_title color-main font-additional font-weight-bold text-uppercase">GET IN TOUCH</span></h4>
								<div class="footer-top_container clearfix">
									<ul class="footer-contact">
										<li class="font-main font-weight-normal color-additional">
											<span class="icon_pin" aria-hidden="true"></span> Woocom ABC Road 14 Street
											<br>XYZ Country
										</li>
										<li class="font-main font-weight-normal color-additional oneLine">
											<span class="icon_phone" aria-hidden="true"></span> (800) 9235 3658 32
										</li>
										<li class="font-main font-weight-normal color-additional oneLine">
											<span class="icon_mail" aria-hidden="true"></span> info@mail.com
										</li>
										<li class="font-main font-weight-normal color-additional">
											<span class="icon_clock" aria-hidden="true"></span> Mon to Sat : 08:30 AM - 09:30 PM
											<br>Sun : 10:00 PM - 4:00 PM
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="footer-bottom">
					<div class="container">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 clearfix">
								<span class="footer_copyright font-main" style="color:#fff;">Created by <span class="font-main font-weight-semibold">ewebcraft</span> &copy; 2015 All rights reserved.</span>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 clearfix">
								<ul class="footer-payments pull-right">
									<li><img src="<?php echo base_url();?>images/C-1.jpg" alt="Payments"></li>
									<li><img src="<?php echo base_url();?>images/C-2.jpg" alt="Payments"></li>
									<li><img src="<?php echo base_url();?>images/C-3.jpg" alt="Payments"></li>
									<li><img src="<?php echo base_url();?>images/C-4.jpg" alt="Payments"></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</footer>
		</div>

		<script src="<?php echo base_url();?>js/jquery-1.11.2.min.js"></script>
		<script src="<?php echo base_url();?>js/jquery-ui.min.js"></script>
		<script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
		<script src="<?php echo base_url();?>js/modernizr.custom.js"></script>
		<script src="<?php echo base_url();?>js/jquery.placeholder.min.js"></script>
		<script src="<?php echo base_url();?>js/smoothscroll.min.js"></script>

		<script src="<?php echo base_url();?>plugins/owl-carousel/owl.carousel.min.js"></script>

		<script src="<?php echo base_url();?>plugins/bxslider/jquery.bxslider.min.js"></script>

		<script src="<?php echo base_url();?>plugins/switcher/js/bootstrap-select.js"></script>
		<script src="<?php echo base_url();?>plugins/switcher/js/evol.colorpicker.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url();?>plugins/switcher/js/dmss.js"></script>

		<script type="text/javascript" src="<?php echo base_url();?>plugins/isotope/jquery.isotope.min.js"></script>

		<script src="<?php echo base_url();?>js/wow.min.js"></script>
		<script src="<?php echo base_url();?>js/cssua.min.js"></script>
		<script src="<?php echo base_url();?>js/theme.js"></script>

		<script type="text/javascript">
			$(document).ready(function(){
				$('#teacher').click(function(){$('html,body').animate({scrollTop:$('#t').offset().top}, 800);}); 
				$('#car-type').click(function(){$('html,body').animate({scrollTop:$('#ct').offset().top}, 800);}); 
				$('#place').click(function(){$('html,body').animate({scrollTop:$('#p').offset().top}, 800);}); 
			});
		</script>

	</body>

</html>