<!DOCTYPE html>
<html lang="en">
<head>
<title>ALLSensor</title>
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
	<?php
		echo $header;
		echo $sidebar;
		// echo $carousel_home;
	?>

	<!-- CONTENT -Start -->
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
	<!-- CONTENT - End -->

	<?php 
		echo $newsletter;
		echo $footer;
	?>
</div>
<?php
	echo $script;
	echo $product_script;
	echo $imageZoom_script;
?>
</body>
</html>