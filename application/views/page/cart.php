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
	echo $cart_style;
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
				<div class="home_title">Cart</div>
				<div class="breadcrumbs">
					<ul class="d-flex flex-row align-items-center justify-content-start">
						<li><a href="index.html">Home</a></li>
						<li>Your Cart</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<!-- Cart -->
	<div class="cart_section">
		<div class="section_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="cart_container">
							
							<!-- Cart Bar -->
							<div class="cart_bar">
								<ul class="cart_bar_list item_list d-flex flex-row align-items-center justify-content-start">
									<li>Product</li>
									<li>Color</li>
									<li>Size</li>
									<li>Price</li>
									<li>Quantity</li>
									<li>Total</li>
								</ul>
							</div>

							<!-- Cart Items -->
							<div class="cart_items">
								<ul class="cart_items_list">

									<!-- Cart Item -->
									<li class="cart_item item_list d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">
										<div class="product d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">
											<div><div class="product_image"><img src="<?php echo base_url(); ?>assets/images/cart_1.jpg" alt=""></div></div>
											<div class="product_name"><a href="product.html">Brown Shoulder Bag</a></div>
										</div>
										<div class="product_color text-lg-center product_text"><span>Color: </span>Brown</div>
										<div class="product_size text-lg-center product_text"><span>Size: </span>One Size</div>
										<div class="product_price text-lg-center product_text"><span>Price: </span>$19.50</div>
										<div class="product_quantity_container">
											<div class="product_quantity ml-lg-auto mr-lg-auto text-center">
												<span class="product_text product_num">1</span>
												<div class="qty_sub qty_button trans_200 text-center"><span>-</span></div>
												<div class="qty_add qty_button trans_200 text-center"><span>+</span></div>
											</div>
										</div>
										<div class="product_total text-lg-center product_text"><span>Total: </span>$19.50</div>
									</li>
								</ul>
							</div>

							<!-- Cart Buttons -->
							<div class="cart_buttons d-flex flex-row align-items-start justify-content-start">
								<div class="cart_buttons_inner ml-auto d-flex flex-row align-items-start justify-content-start flex-wrap">
									<div class="button button_continue trans_200"><a href="categories.html">continue shopping</a></div>
									<div class="button button_clear trans_200"><a href="categories.html">clear cart</a></div>
									<div class="button button_update trans_200"><a href="categories.html">update cart</a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="section_container cart_extra_container">
			<div class="container">
				<div class="row">

					<!-- Shipping & Delivery -->
					<div class="col-xxl-6">
						<div class="cart_extra cart_extra_1">
							<div class="cart_extra_content cart_extra_coupon">
								<div class="cart_extra_title">Coupon code</div>
								<div class="coupon_form_container">
									<form action="#" id="coupon_form" class="coupon_form">
										<input type="text" class="coupon_input" required="required">
										<button class="coupon_button">apply code</button>
									</form>
								</div>
								<div class="shipping">
									<div class="cart_extra_title">Shipping Method</div>
									<ul>
										<li class="shipping_option d-flex flex-row align-items-center justify-content-start">
											<label class="radio_container">
												<input type="radio" id="radio_1" name="shipping_radio" class="shipping_radio">
												<span class="radio_mark"></span>
												<span class="radio_text">Next day delivery</span>
											</label>
											<div class="shipping_price ml-auto">$4.99</div>
										</li>
										<li class="shipping_option d-flex flex-row align-items-center justify-content-start">
											<label class="radio_container">
												<input type="radio" id="radio_2" name="shipping_radio" class="shipping_radio">
												<span class="radio_mark"></span>
												<span class="radio_text">Standard delivery</span>
											</label>
											<div class="shipping_price ml-auto">$1.99</div>
										</li>
										<li class="shipping_option d-flex flex-row align-items-center justify-content-start">
											<label class="radio_container">
												<input type="radio" id="radio_3" name="shipping_radio" class="shipping_radio" checked>
												<span class="radio_mark"></span>
												<span class="radio_text">Personal Pickup</span>
											</label>
											<div class="shipping_price ml-auto">Free</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>

					<!-- Cart Total -->
					<div class="col-xxl-6">
						<div class="cart_extra cart_extra_2">
							<div class="cart_extra_content cart_extra_total">
								<div class="cart_extra_title">Cart Total</div>
								<ul class="cart_extra_total_list">
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div class="cart_extra_total_title">Subtotal</div>
										<div class="cart_extra_total_value ml-auto">$29.90</div>
									</li>
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div class="cart_extra_total_title">Shipping</div>
										<div class="cart_extra_total_value ml-auto">Free</div>
									</li>
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div class="cart_extra_total_title">Total</div>
										<div class="cart_extra_total_value ml-auto">$29.90</div>
									</li>
								</ul>
								<div class="checkout_button trans_200"><a href="checkout.html">proceed to checkout</a></div>
							</div>
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
	echo $cart_script;
?>
</body>
</html>