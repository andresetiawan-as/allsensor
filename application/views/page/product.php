<!DOCTYPE html>
<html lang="en">
<head>
<title>Product</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="aStar Fashion Template Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php
	echo $style;
	echo $product_style;
	echo $imageZoom_style;
?>
</head>
<body>

<div class="super_container">

	<!-- Header -->

	<header class="header">
		<div class="header_content d-flex flex-row align-items-center justify-content-start">
			
			<!-- Hamburger -->
			<div class="hamburger menu_mm"><i class="fa fa-bars menu_mm" aria-hidden="true"></i></div>

			<!-- Logo -->
			<div class="header_logo">
				<a href="#"><div>a<span>star</span></div></a>
			</div>

			<!-- Navigation -->
			<nav class="header_nav">
				<ul class="d-flex flex-row align-items-center justify-content-start">
					<li><a href="index.html">home</a></li>
					<li><a href="#">woman</a></li>
					<li><a href="#">man</a></li>
					<li><a href="#">lookbook</a></li>
					<li><a href="#">blog</a></li>
					<li><a href="#">contact</a></li>
				</ul>
			</nav>

			<!-- Header Extra -->
			<div class="header_extra ml-auto d-flex flex-row align-items-center justify-content-start">

				<!-- Language -->
				<div class="info_languages has_children">
					<div class="language_flag"><img src="<?php echo base_url(); ?>assets/images/flag_1.svg" alt="https://www.flaticon.com/authors/freepik"></div>
					<div class="dropdown_text">english</div>
					<div class="dropdown_arrow"><i class="fa fa-angle-down" aria-hidden="true"></i></div>
					
					<!-- Language Dropdown Menu -->
					 <ul>
					 	<li><a href="#">
				 			<div class="language_flag"><img src="<?php echo base_url(); ?>assets/images/flag_2.svg" alt="https://www.flaticon.com/authors/freepik"></div>
							<div class="dropdown_text">french</div>
					 	</a></li>
					 	<li><a href="#">
				 			<div class="language_flag"><img src="<?php echo base_url(); ?>assets/images/flag_3.svg" alt="https://www.flaticon.com/authors/freepik"></div>
							<div class="dropdown_text">japanese</div>
					 	</a></li>
					 	<li><a href="#">
				 			<div class="language_flag"><img src="<?php echo base_url(); ?>assets/images/flag_4.svg" alt="https://www.flaticon.com/authors/freepik"></div>
							<div class="dropdown_text">russian</div>
					 	</a></li>
					 	<li><a href="#">
				 			<div class="language_flag"><img src="<?php echo base_url(); ?>assets/images/flag_5.svg" alt="https://www.flaticon.com/authors/freepik"></div>
							<div class="dropdown_text">spanish</div>
					 	</a></li>
					 </ul>

				</div>

				<!-- Currency -->
				<div class="info_currencies has_children">
					<div class="dropdown_text">usd</div>
					<div class="dropdown_arrow"><i class="fa fa-angle-down" aria-hidden="true"></i></div>

					<!-- Currencies Dropdown Menu -->
					 <ul>
					 	<li><a href="#"><div class="dropdown_text">EUR</div></a></li>
					 	<li><a href="#"><div class="dropdown_text">YEN</div></a></li>
					 	<li><a href="#"><div class="dropdown_text">GBP</div></a></li>
					 	<li><a href="#"><div class="dropdown_text">CAD</div></a></li>
					 </ul>

				</div>

				<!-- Cart -->
				<div class="cart d-flex flex-row align-items-center justify-content-start">
					<div class="cart_icon"><a href="cart.html">
						<img src="<?php echo base_url(); ?>assets/images/bag.png" alt="">
						<div class="cart_num">2</div>
					</a></div>
				</div>

			</div>

		</div>
	</header>

	<!-- Menu -->

	<div class="menu d-flex flex-column align-items-start justify-content-start menu_mm trans_400">
		<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
		<div class="menu_top d-flex flex-row align-items-center justify-content-start">

			<!-- Language -->
			<div class="info_languages has_children">
				<div class="language_flag"><img src="<?php echo base_url(); ?>assets/images/flag_1.svg" alt="https://www.flaticon.com/authors/freepik"></div>
				<div class="dropdown_text">english</div>
				<div class="dropdown_arrow"><i class="fa fa-angle-down" aria-hidden="true"></i></div>
				
				<!-- Language Dropdown Menu -->
				 <ul>
				 	<li><a href="#">
			 			<div class="language_flag"><img src="<?php echo base_url(); ?>assets/images/flag_2.svg" alt="https://www.flaticon.com/authors/freepik"></div>
						<div class="dropdown_text">french</div>
				 	</a></li>
				 	<li><a href="#">
			 			<div class="language_flag"><img src="<?php echo base_url(); ?>assets/images/flag_3.svg" alt="https://www.flaticon.com/authors/freepik"></div>
						<div class="dropdown_text">japanese</div>
				 	</a></li>
				 	<li><a href="#">
			 			<div class="language_flag"><img src="<?php echo base_url(); ?>assets/images/flag_4.svg" alt="https://www.flaticon.com/authors/freepik"></div>
						<div class="dropdown_text">russian</div>
				 	</a></li>
				 	<li><a href="#">
			 			<div class="language_flag"><img src="<?php echo base_url(); ?>assets/images/flag_5.svg" alt="https://www.flaticon.com/authors/freepik"></div>
						<div class="dropdown_text">spanish</div>
				 	</a></li>
				 </ul>

			</div>

			<!-- Currency -->
			<div class="info_currencies has_children">
				<div class="dropdown_text">usd</div>
				<div class="dropdown_arrow"><i class="fa fa-angle-down" aria-hidden="true"></i></div>

				<!-- Currencies Dropdown Menu -->
				 <ul>
				 	<li><a href="#"><div class="dropdown_text">EUR</div></a></li>
				 	<li><a href="#"><div class="dropdown_text">YEN</div></a></li>
				 	<li><a href="#"><div class="dropdown_text">GBP</div></a></li>
				 	<li><a href="#"><div class="dropdown_text">CAD</div></a></li>
				 </ul>

			</div>

		</div>
		<div class="menu_search">
			<form action="#" class="header_search_form menu_mm">
				<input type="search" class="search_input menu_mm" placeholder="Search" required="required">
				<button class="header_search_button d-flex flex-column align-items-center justify-content-center menu_mm">
					<i class="fa fa-search menu_mm" aria-hidden="true"></i>
				</button>
			</form>
		</div>
		<nav class="menu_nav">
			<ul class="menu_mm">
				<li class="menu_mm"><a href="index.html">home</a></li>
				<li class="menu_mm"><a href="#">woman</a></li>
				<li class="menu_mm"><a href="#">man</a></li>
				<li class="menu_mm"><a href="#">lookbook</a></li>
				<li class="menu_mm"><a href="blog.html">blog</a></li>
				<li class="menu_mm"><a href="contact.html">contact</a></li>
			</ul>
		</nav>
		<div class="menu_extra">
			<div class="menu_social">
				<ul>
					<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				</ul>
			</div>
		</div>
	</div>
	
	<!-- Sidebar -->

	<div class="sidebar">
		
		<!-- Info -->
		<div class="info">
			<div class="info_content d-flex flex-row align-items-center justify-content-start">
				
				<!-- Language -->
				<div class="info_languages has_children">
					<div class="language_flag"><img src="<?php echo base_url(); ?>assets/images/flag_1.svg" alt="https://www.flaticon.com/authors/freepik"></div>
					<div class="dropdown_text">english</div>
					<div class="dropdown_arrow"><i class="fa fa-angle-down" aria-hidden="true"></i></div>
					
					<!-- Language Dropdown Menu -->
					 <ul>
					 	<li><a href="#">
				 			<div class="language_flag"><img src="<?php echo base_url(); ?>assets/images/flag_2.svg" alt="https://www.flaticon.com/authors/freepik"></div>
							<div class="dropdown_text">french</div>
					 	</a></li>
					 	<li><a href="#">
				 			<div class="language_flag"><img src="<?php echo base_url(); ?>assets/images/flag_3.svg" alt="https://www.flaticon.com/authors/freepik"></div>
							<div class="dropdown_text">japanese</div>
					 	</a></li>
					 	<li><a href="#">
				 			<div class="language_flag"><img src="<?php echo base_url(); ?>assets/images/flag_4.svg" alt="https://www.flaticon.com/authors/freepik"></div>
							<div class="dropdown_text">russian</div>
					 	</a></li>
					 	<li><a href="#">
				 			<div class="language_flag"><img src="<?php echo base_url(); ?>assets/images/flag_5.svg" alt="https://www.flaticon.com/authors/freepik"></div>
							<div class="dropdown_text">spanish</div>
					 	</a></li>
					 </ul>

				</div>

				<!-- Currency -->
				<div class="info_currencies has_children">
					<div class="dropdown_text">usd</div>
					<div class="dropdown_arrow"><i class="fa fa-angle-down" aria-hidden="true"></i></div>

					<!-- Currencies Dropdown Menu -->
					 <ul>
					 	<li><a href="#"><div class="dropdown_text">EUR</div></a></li>
					 	<li><a href="#"><div class="dropdown_text">YEN</div></a></li>
					 	<li><a href="#"><div class="dropdown_text">GBP</div></a></li>
					 	<li><a href="#"><div class="dropdown_text">CAD</div></a></li>
					 </ul>

				</div>

			</div>
		</div>

		<!-- Logo -->
		<div class="sidebar_logo">
			<a href="#"><div>a<span>star</span></div></a>
		</div>

		<!-- Sidebar Navigation -->
		<nav class="sidebar_nav">
			<ul>
				<li><a href="index.html">home<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
				<li><a href="#">woman<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
				<li><a href="#">man<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
				<li><a href="#">lookbook<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
				<li><a href="blog.html">blog<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
				<li><a href="#">contact<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
			</ul>
		</nav>

		<!-- Search -->
		<div class="search">
			<form action="#" class="search_form" id="sidebar_search_form">
				<input type="text" class="search_input" placeholder="Search" required="required">
				<button class="search_button"><i class="fa fa-search" aria-hidden="true"></i></button>
			</form>
		</div>

		<!-- Cart -->
		<div class="cart d-flex flex-row align-items-center justify-content-start">
			<div class="cart_icon"><a href="cart.html">
				<img src="<?php echo base_url(); ?>assets/images/bag.png" alt="">
				<div class="cart_num">2</div>
			</a></div>
			<div class="cart_text">bag</div>
			<div class="cart_price">$39.99 (1)</div>
		</div>
	</div>

	<!-- Home -->

	<div class="home">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="<?php echo base_url(); ?>assets/images/product_background.jpg" data-speed="0.8"></div>
		<div class="home_container">
			<div class="home_content">
				<div class="home_title">Shop</div>
				<div class="breadcrumbs">
					<ul class="d-flex flex-row align-items-center justify-content-start">
						<li><a href="index.html">Home</a></li>
						<li><a href="categories.html">Woman</a></li>
						<li><a href="categories.html">Accessories</a></li>
						<li>Shoulder Bag</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<!-- Products -->

	<div class="product">
		<!-- Sorting & Filtering -->
		<div class="products_bar">
			<div class="section_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="products_bar_content d-flex flex-row align-items-center justify-content-start">
								<div class="product_categories">
									<ul class="d-flex flex-row align-items-start justify-content-start flex-wrap">
										<li class="active"><a href="#">All</a></li>
										<li><a href="#">Hot Products</a></li>
										<li><a href="#">New Products</a></li>
										<li><a href="#">Sale Products</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Product Content -->
		<div class="section_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="product_content_container d-flex flex-lg-row flex-column align-items-start justify-content-start">
							<div class="product_content order-lg-1 order-2">
								<div class="product_content_inner">
									<div class="product_image_row d-flex flex-md-row flex-column align-items-md-end align-items-start justify-content-start">
										<div class="product_image_1 product_image">
											<img src="<?php echo base_url(); ?>assets/images/product_single_1.jpg" alt="">
										</div>
										<div class="product_image_2 product_image"><img src="<?php echo base_url(); ?>assets/images/product_single_2.jpg" alt=""></div>
									</div>
									<div class="product_image_row">
										<div class="product_image_3 product_image"><img src="<?php echo base_url(); ?>assets/images/product_single_3.jpg" alt=""></div>
									</div>
									<div class="product_image_row d-flex flex-md-row flex-column align-items-start justify-content-start">
										<div class="product_image_4 product_image"><img src="<?php echo base_url(); ?>assets/images/product_single_4.jpg" alt=""></div>
										<div class="product_image_5 product_image"><img src="<?php echo base_url(); ?>assets/images/product_single_5.jpg" alt=""></div>
									</div>
								</div>
							</div>
							<div class="product_sidebar order-lg-2 order-1">
								<form action="#" id="product_form" class="product_form">
									<div class="product_name">Brown Shoulder Bag</div>
									<div class="product_price">$19.50</div>
									<div class="product_color">Color: <span>Brown</span></div>
									<div class="product_size">
										<div class="product_size_title">Select Size</div>
										<div class="product_size_list">
											<ul>
												<li class="size_available">
													<input type="radio" id="radio_1" name="product_radio" class="regular_radio radio_1">
													<label for="radio_1">35</label>
												</li>
												<li class="size_available">
													<input type="radio" id="radio_2" name="product_radio" class="regular_radio radio_2">
													<label for="radio_2">36</label>
												</li>
												<li class="size_available">
													<input type="radio" id="radio_3" name="product_radio" class="regular_radio radio_3">
													<label for="radio_3">37</label>
												</li>
												<li class="size_available">
													<input type="radio" id="radio_4" name="product_radio" class="regular_radio radio_4">
													<label for="radio_4">38</label>
												</li>
												<li>
													<input type="radio" id="radio_5" name="product_radio" class="regular_radio radio_5" disabled>
													<label for="radio_5">39</label>
												</li>
												<li>
													<input type="radio" id="radio_6" name="product_radio" class="regular_radio radio_6" disabled>
													<label for="radio_6">40</label>
												</li>
											</ul>
										</div>
									</div>
									<button class="cart_button trans_200">add to cart</button>
									<div class="similar_products_button trans_200"><a href="categories.html">see similar products</a></div>
								</form>
								<div class="product_links">
									<ul class="text-center">
										<li><a href="#">See guide</a></li>
										<li><a href="#">Shipping</a></li>
										<li><a href="#">Returns</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Image Zoom Viewer -->
		<div class="section_container">
			<div class="container">
				<h1>Product Gallery With Image Zoom Example</h1>
				<div class="show" href="">
					<img src="<?php echo base_url(); ?>assets/images/product_single_1.jpg" id="show-img">
				</div>
				<div class="small-img">
					<img src="<?php echo base_url(); ?>assets/images/imageZoom/online_icon_right@2x.png" class="icon-left" alt="" id="prev-img">
					<div class="small-container">
						<div id="small-img-roll">
							<img src="<?php echo base_url(); ?>assets/images/product_single_1.jpg" class="show-small-img" alt="">
							<img src="<?php echo base_url(); ?>assets/images/product_single_2.jpg" class="show-small-img" alt="">
							<img src="<?php echo base_url(); ?>assets/images/product_single_3.jpg" class="show-small-img" alt="">
							<img src="<?php echo base_url(); ?>assets/images/product_single_4.jpg" class="show-small-img" alt="">
							<img src="<?php echo base_url(); ?>assets/images/product_single_5.jpg" class="show-small-img" alt="">

							<!-- <img src="https://placeimg.com/1000/1000/animals" class="show-small-img" alt=""> -->
							<!-- <img src="https://placeimg.com/1000/1000/arch" class="show-small-img" alt="">
							<img src="https://placeimg.com/1000/1000/nature" class="show-small-img" alt="">
							<img src="https://placeimg.com/1000/1000/people" class="show-small-img" alt="">
							<img src="https://placeimg.com/1000/1000/tech" class="show-small-img" alt="">
							<img src="https://picsum.photos/1000/1000/?random" class="show-small-img" alt=""> -->
						</div>
					</div>
					<img src="<?php echo base_url(); ?>assets/images/imageZoom/online_icon_right@2x.png" class="icon-right" alt="" id="next-img">
				</div>
			</div>
		</div>

		<br><br><br>

		<!-- Related Product -->
		<div class="section_container">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2>Related <b>Products</b></h2>
						<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
						<!-- Carousel indicators -->
						<ol class="carousel-indicators">
							<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
							<li data-target="#myCarousel" data-slide-to="1"></li>
							<li data-target="#myCarousel" data-slide-to="2"></li>
						</ol>   
						<!-- Wrapper for carousel items -->
						<div class="carousel-inner">

							<div class="item carousel-item active">
								<div class="row">
									<div class="col-sm-3">
										<div class="thumb-wrapper">
											<div class="img-box">
												<img src="<?php echo base_url(); ?>assets/images/product_single_1.jpg" class="img-responsive img-fluid" alt="">
											</div>
											<div class="thumb-content">
												<h4>Apple iPad</h4>
												<p class="item-price"><strike>$400.00</strike> <span>$369.00</span></p>
												<div class="star-rating">
													<ul class="list-inline">
														<li class="list-inline-item"><i class="fa fa-star"></i></li>
														<li class="list-inline-item"><i class="fa fa-star"></i></li>
														<li class="list-inline-item"><i class="fa fa-star"></i></li>
														<li class="list-inline-item"><i class="fa fa-star"></i></li>
														<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
													</ul>
												</div>
												<a href="#" class="btn btn-primary">Add to Cart</a>
											</div>						
										</div>
									</div>
									<div class="col-sm-3">
										<div class="thumb-wrapper">
											<div class="img-box">
												<img src="<?php echo base_url(); ?>assets/images/product_single_2.jpg" class="img-responsive img-fluid" alt="">
											</div>
											<div class="thumb-content">
												<h4>Sony Headphone</h4>
												<p class="item-price"><strike>$25.00</strike> <span>$23.99</span></p>
												<div class="star-rating">
													<ul class="list-inline">
														<li class="list-inline-item"><i class="fa fa-star"></i></li>
														<li class="list-inline-item"><i class="fa fa-star"></i></li>
														<li class="list-inline-item"><i class="fa fa-star"></i></li>
														<li class="list-inline-item"><i class="fa fa-star"></i></li>
														<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
													</ul>
												</div>
												<a href="#" class="btn btn-primary">Add to Cart</a>
											</div>						
										</div>
									</div>		
									<div class="col-sm-3">
										<div class="thumb-wrapper">
											<div class="img-box">
												<img src="<?php echo base_url(); ?>assets/images/product_single_3.jpg" class="img-responsive img-fluid" alt="">
											</div>
											<div class="thumb-content">
												<h4>Macbook Air</h4>
												<p class="item-price"><strike>$899.00</strike> <span>$649.00</span></p>
												<div class="star-rating">
													<ul class="list-inline">
														<li class="list-inline-item"><i class="fa fa-star"></i></li>
														<li class="list-inline-item"><i class="fa fa-star"></i></li>
														<li class="list-inline-item"><i class="fa fa-star"></i></li>
														<li class="list-inline-item"><i class="fa fa-star"></i></li>
														<li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
													</ul>
												</div>
												<a href="#" class="btn btn-primary">Add to Cart</a>
											</div>						
										</div>
									</div>								
									<div class="col-sm-3">
										<div class="thumb-wrapper">
											<div class="img-box">
												<img src="<?php echo base_url(); ?>assets/images/product_single_4.jpg" class="img-responsive img-fluid" alt="">
											</div>
											<div class="thumb-content">
												<h4>Nikon DSLR</h4>
												<p class="item-price"><strike>$315.00</strike> <span>$250.00</span></p>
												<div class="star-rating">
													<ul class="list-inline">
														<li class="list-inline-item"><i class="fa fa-star"></i></li>
														<li class="list-inline-item"><i class="fa fa-star"></i></li>
														<li class="list-inline-item"><i class="fa fa-star"></i></li>
														<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
														<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
													</ul>
												</div>
												<a href="#" class="btn btn-primary">Add to Cart</a>
											</div>						
										</div>
									</div>
								</div>
							</div>

							<div class="item carousel-item">
								<div class="row">
									<div class="col-sm-3">
										<div class="thumb-wrapper">
											<div class="img-box">
												<img src="/examples/images/products/play-station.jpg" class="img-responsive img-fluid" alt="">
											</div>
											<div class="thumb-content">
												<h4>Sony Play Station</h4>
												<p class="item-price"><strike>$289.00</strike> <span>$269.00</span></p>
												<div class="star-rating">
													<ul class="list-inline">
														<li class="list-inline-item"><i class="fa fa-star"></i></li>
														<li class="list-inline-item"><i class="fa fa-star"></i></li>
														<li class="list-inline-item"><i class="fa fa-star"></i></li>
														<li class="list-inline-item"><i class="fa fa-star"></i></li>
														<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
													</ul>
												</div>
												<a href="#" class="btn btn-primary">Add to Cart</a>
											</div>						
										</div>
									</div>
									<div class="col-sm-3">
										<div class="thumb-wrapper">
											<div class="img-box">
												<img src="/examples/images/products/macbook-pro.jpg" class="img-responsive img-fluid" alt="">
											</div>
											<div class="thumb-content">
												<h4>Macbook Pro</h4>
												<p class="item-price"><strike>$1099.00</strike> <span>$869.00</span></p>
												<div class="star-rating">
													<ul class="list-inline">
														<li class="list-inline-item"><i class="fa fa-star"></i></li>
														<li class="list-inline-item"><i class="fa fa-star"></i></li>
														<li class="list-inline-item"><i class="fa fa-star"></i></li>
														<li class="list-inline-item"><i class="fa fa-star"></i></li>
														<li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
													</ul>
												</div>
												<a href="#" class="btn btn-primary">Add to Cart</a>
											</div>						
										</div>
									</div>
									<div class="col-sm-3">
										<div class="thumb-wrapper">
											<div class="img-box">
												<img src="/examples/images/products/speaker.jpg" class="img-responsive img-fluid" alt="">
											</div>
											<div class="thumb-content">
												<h4>Bose Speaker</h4>
												<p class="item-price"><strike>$109.00</strike> <span>$99.00</span></p>
												<div class="star-rating">
													<ul class="list-inline">
														<li class="list-inline-item"><i class="fa fa-star"></i></li>
														<li class="list-inline-item"><i class="fa fa-star"></i></li>
														<li class="list-inline-item"><i class="fa fa-star"></i></li>
														<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
														<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
													</ul>
												</div>
												<a href="#" class="btn btn-primary">Add to Cart</a>
											</div>						
										</div>
									</div>
									<div class="col-sm-3">
										<div class="thumb-wrapper">
											<div class="img-box">
												<img src="/examples/images/products/galaxy.jpg" class="img-responsive img-fluid" alt="">
											</div>
											<div class="thumb-content">
												<h4>Samsung Galaxy S8</h4>
												<p class="item-price"><strike>$599.00</strike> <span>$569.00</span></p>
												<div class="star-rating">
													<ul class="list-inline">
														<li class="list-inline-item"><i class="fa fa-star"></i></li>
														<li class="list-inline-item"><i class="fa fa-star"></i></li>
														<li class="list-inline-item"><i class="fa fa-star"></i></li>
														<li class="list-inline-item"><i class="fa fa-star"></i></li>
														<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
													</ul>
												</div>
												<a href="#" class="btn btn-primary">Add to Cart</a>
											</div>						
										</div>
									</div>						
								</div>
							</div>

							<div class="item carousel-item">
								<div class="row">
									<div class="col-sm-3">
										<div class="thumb-wrapper">
											<div class="img-box">
												<img src="/examples/images/products/iphone.jpg" class="img-responsive img-fluid" alt="">
											</div>
											<div class="thumb-content">
												<h4>Apple iPhone</h4>
												<p class="item-price"><strike>$369.00</strike> <span>$349.00</span></p>
												<div class="star-rating">
													<ul class="list-inline">
														<li class="list-inline-item"><i class="fa fa-star"></i></li>
														<li class="list-inline-item"><i class="fa fa-star"></i></li>
														<li class="list-inline-item"><i class="fa fa-star"></i></li>
														<li class="list-inline-item"><i class="fa fa-star"></i></li>
														<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
													</ul>
												</div>
												<a href="#" class="btn btn-primary">Add to Cart</a>
											</div>						
										</div>
									</div>
									<div class="col-sm-3">
										<div class="thumb-wrapper">
											<div class="img-box">
												<img src="/examples/images/products/canon.jpg" class="img-responsive img-fluid" alt="">
											</div>
											<div class="thumb-content">
												<h4>Canon DSLR</h4>
												<p class="item-price"><strike>$315.00</strike> <span>$250.00</span></p>
												<div class="star-rating">
													<ul class="list-inline">
														<li class="list-inline-item"><i class="fa fa-star"></i></li>
														<li class="list-inline-item"><i class="fa fa-star"></i></li>
														<li class="list-inline-item"><i class="fa fa-star"></i></li>
														<li class="list-inline-item"><i class="fa fa-star"></i></li>
														<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
													</ul>
												</div>
												<a href="#" class="btn btn-primary">Add to Cart</a>
											</div>						
										</div>
									</div>
									<div class="col-sm-3">
										<div class="thumb-wrapper">
											<div class="img-box">
												<img src="/examples/images/products/pixel.jpg" class="img-responsive img-fluid" alt="">
											</div>
											<div class="thumb-content">
												<h4>Google Pixel</h4>
												<p class="item-price"><strike>$450.00</strike> <span>$418.00</span></p>
												<div class="star-rating">
													<ul class="list-inline">
														<li class="list-inline-item"><i class="fa fa-star"></i></li>
														<li class="list-inline-item"><i class="fa fa-star"></i></li>
														<li class="list-inline-item"><i class="fa fa-star"></i></li>
														<li class="list-inline-item"><i class="fa fa-star"></i></li>
														<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
													</ul>
												</div>
												<a href="#" class="btn btn-primary">Add to Cart</a>
											</div>						
										</div>
									</div>	
									<div class="col-sm-3">
										<div class="thumb-wrapper">
											<div class="img-box">
												<img src="/examples/images/products/watch.jpg" class="img-responsive img-fluid" alt="">
											</div>
											<div class="thumb-content">
												<h4>Apple Watch</h4>
												<p class="item-price"><strike>$350.00</strike> <span>$330.00</span></p>
												<div class="star-rating">
													<ul class="list-inline">
														<li class="list-inline-item"><i class="fa fa-star"></i></li>
														<li class="list-inline-item"><i class="fa fa-star"></i></li>
														<li class="list-inline-item"><i class="fa fa-star"></i></li>
														<li class="list-inline-item"><i class="fa fa-star"></i></li>
														<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
													</ul>
												</div>
												<a href="#" class="btn btn-primary">Add to Cart</a>
											</div>						
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Carousel controls -->
						<a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Newsletter -->

	<div class="newsletter">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="<?php echo base_url(); ?>assets/images/newsletter.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2">
					<div class="newsletter_content text-center">
						<div class="newsletter_title_container">
							<div class="newsletter_title">subscribe to our newsletter</div>
							<div class="newsletter_subtitle">we won't spam, we promise!</div>
						</div>
						<div class="newsletter_form_container">
							<form action="#" id="newsletter_form" class="newsletter_form">
								<input type="email" class="newsletter_input" placeholder="your e-mail here" required="required">
								<button class="newsletter_button">submit</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->

	<footer class="footer">
		<div class="footer_content">
			<div class="section_container">
				<div class="container">
					<div class="row">
						
						<!-- About -->
						<div class="col-xxl-3 col-md-6 footer_col">
							<div class="footer_about">
								<!-- Logo -->
								<div class="footer_logo">
									<a href="#"><div>a<span>star</span></div></a>
								</div>
								<div class="footer_about_text">
									<p>Donec vitae purus nunc. Morbi faucibus erat sit amet congue mattis. Nullam fringilla faucibus urna, id dapibus erat iaculis ut. Integer ac sem.</p>
								</div>
								<div class="cards">
									<ul class="d-flex flex-row align-items-center justify-content-start">
										<li><a href="#"><img src="<?php echo base_url(); ?>assets/images/card_1.jpg" alt=""></a></li>
										<li><a href="#"><img src="<?php echo base_url(); ?>assets/images/card_2.jpg" alt=""></a></li>
										<li><a href="#"><img src="<?php echo base_url(); ?>assets/images/card_3.jpg" alt=""></a></li>
										<li><a href="#"><img src="<?php echo base_url(); ?>assets/images/card_4.jpg" alt=""></a></li>
										<li><a href="#"><img src="<?php echo base_url(); ?>assets/images/card_5.jpg" alt=""></a></li>
									</ul>
								</div>
							</div>
						</div>

						<!-- Questions -->
						<div class="col-xxl-3 col-md-6 footer_col">
							<div class="footer_questions">
								<div class="footer_title">questions</div>
								<div class="footer_list">
									<ul>
										<li><a href="#">About us</a></li>
										<li><a href="#">Track Orders</a></li>
										<li><a href="#">Returns</a></li>
										<li><a href="#">Jobs</a></li>
										<li><a href="#">Shipping</a></li>
										<li><a href="#">Blog</a></li>
										<li><a href="#">Partners</a></li>
										<li><a href="#">Bloggers</a></li>
										<li><a href="#">Support</a></li>
										<li><a href="#">Terms of Use</a></li>
										<li><a href="#">Press</a></li>
									</ul>
								</div>
							</div>
						</div>

						<!-- Blog -->
						<div class="col-xxl-3 col-md-6 footer_col">
							<div class="footer_blog">
								<div class="footer_title">blog</div>
								<div class="footer_blog_container">

									<!-- Blog Item -->
									<div class="footer_blog_item d-flex flex-row align-items-start justify-content-start">
										<div class="footer_blog_image"><a href="blog.html"><img src="<?php echo base_url(); ?>assets/images/footer_blog_1.jpg" alt=""></a></div>
										<div class="footer_blog_content">
											<div class="footer_blog_title"><a href="blog.html">what shoes to wear</a></div>
											<div class="footer_blog_date">june 06, 2018</div>
											<div class="footer_blog_link"><a href="blog.html">Read More</a></div>
										</div>
									</div>

									<!-- Blog Item -->
									<div class="footer_blog_item d-flex flex-row align-items-start justify-content-start">
										<div class="footer_blog_image"><a href="blog.html"><img src="<?php echo base_url(); ?>assets/images/footer_blog_2.jpg" alt=""></a></div>
										<div class="footer_blog_content">
											<div class="footer_blog_title"><a href="blog.html">trends this year</a></div>
											<div class="footer_blog_date">june 06, 2018</div>
											<div class="footer_blog_link"><a href="blog.html">Read More</a></div>
										</div>
									</div>

								</div>
							</div>
						</div>

						<!-- Contact -->
						<div class="col-xxl-3 col-md-6 footer_col">
							<div class="footer_contact">
								<div class="footer_title">contact</div>
								<div class="footer_contact_list">
									<ul>
										<li class="d-flex flex-row align-items-start justify-content-start"><span>C.</span><div>Your Company Ltd</div></li>
										<li class="d-flex flex-row align-items-start justify-content-start"><span>A.</span><div>1481 Creekside Lane  Avila Beach, CA 93424, P.O. BOX 68</div></li>
										<li class="d-flex flex-row align-items-start justify-content-start"><span>T.</span><div>+53 345 7953 32453</div></li>
										<li class="d-flex flex-row align-items-start justify-content-start"><span>E.</span><div>office@youremail.com</div></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Social -->
		<div class="footer_social">
			<div class="section_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="footer_social_container d-flex flex-row align-items-center justify-content-between">
								<!-- Instagram -->
								<a href="#">
									<div class="footer_social_item d-flex flex-row align-items-center justify-content-start">
										<div class="footer_social_icon"><i class="fa fa-instagram" aria-hidden="true"></i></div>
										<div class="footer_social_title">instagram</div>
									</div>
								</a>
								<!-- Google + -->
								<a href="#">
									<div class="footer_social_item d-flex flex-row align-items-center justify-content-start">
										<div class="footer_social_icon"><i class="fa fa-google-plus" aria-hidden="true"></i></div>
										<div class="footer_social_title">google +</div>
									</div>
								</a>
								<!-- Pinterest -->
								<a href="#">
									<div class="footer_social_item d-flex flex-row align-items-center justify-content-start">
										<div class="footer_social_icon"><i class="fa fa-pinterest" aria-hidden="true"></i></div>
										<div class="footer_social_title">pinterest</div>
									</div>
								</a>
								<!-- Facebook -->
								<a href="#">
									<div class="footer_social_item d-flex flex-row align-items-center justify-content-start">
										<div class="footer_social_icon"><i class="fa fa-facebook" aria-hidden="true"></i></div>
										<div class="footer_social_title">facebook</div>
									</div>
								</a>
								<!-- Twitter -->
								<a href="#">
									<div class="footer_social_item d-flex flex-row align-items-center justify-content-start">
										<div class="footer_social_icon"><i class="fa fa-twitter" aria-hidden="true"></i></div>
										<div class="footer_social_title">twitter</div>
									</div>
								</a>
								<!-- YouTube -->
								<a href="#">
									<div class="footer_social_item d-flex flex-row align-items-center justify-content-start">
										<div class="footer_social_icon"><i class="fa fa-youtube" aria-hidden="true"></i></div>
										<div class="footer_social_title">youtube</div>
									</div>
								</a>
								<!-- Tumblr -->
								<a href="#">
									<div class="footer_social_item d-flex flex-row align-items-center justify-content-start">
										<div class="footer_social_icon"><i class="fa fa-tumblr-square" aria-hidden="true"></i></div>
										<div class="footer_social_title">tumblr</div>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>				
		</div>

		<!-- Credits -->
		<div class="credits">
			<div class="section_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="credits_content d-flex flex-row align-items-center justify-content-end">
								<div class="credits_text"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>

</div>
<?php
	echo $script;
	echo $product_script;
	echo $imageZoom_script;
?>

</body>
</html>