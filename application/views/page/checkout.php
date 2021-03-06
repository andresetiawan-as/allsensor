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
	echo $checkout_style;
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
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="<?php echo base_url(); ?>assets/images/checkout.jpg" data-speed="0.8"></div>
		<div class="home_container">
			<div class="home_content">
				<div class="home_title">Checkout</div>
				<div class="breadcrumbs">
					<ul class="d-flex flex-row align-items-center justify-content-start">
						<li><a href="index.html">Home</a></li>
						<li><a href="cart.html">Your Cart</a></li>
						<li>Checkout</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<!-- Checkout -->
	<div class="checkout">
		<div class="section_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="checkout_container d-flex flex-xxl-row flex-column align-items-start justify-content-start">
							
							<!-- Billing -->
							<div class="billing checkout_box">
								<div class="checkout_title">Billing Address</div>
								<div class="checkout_form_container">
									<form action="#" id="checkout_form" class="checkout_form">
										<div class="row">
											<div class="col-lg-6">
												<!-- Name -->
												<label for="checkout_name">First Name*</label>
												<input type="text" id="checkout_name" class="checkout_input" required="required">
											</div>
											<div class="col-lg-6">
												<!-- Last Name -->
												<label for="checkout_last_name">Last Name*</label>
												<input type="text" id="checkout_last_name" class="checkout_input" required="required">
											</div>
										</div>
										<div>
											<!-- Company -->
											<label for="checkout_company">Company</label>
											<input type="text" id="checkout_company" class="checkout_input">
										</div>
										<div>
											<!-- Country -->
											<label for="checkout_country">Country*</label>
											<select name="checkout_country" id="checkout_country" class="dropdown_item_select checkout_input" require="required">
												<option></option>
												<option>Lithuania</option>
												<option>Sweden</option>
												<option>UK</option>
												<option>Italy</option>
											</select>
										</div>
										<div>
											<!-- Address -->
											<label for="checkout_address">Address*</label>
											<input type="text" id="checkout_address" class="checkout_input" required="required">
											<input type="text" id="checkout_address_2" class="checkout_input checkout_address_2" required="required">
										</div>
										<div>
											<!-- Zipcode -->
											<label for="checkout_zipcode">Zipcode*</label>
											<input type="text" id="checkout_zipcode" class="checkout_input" required="required">
										</div>
										<div>
											<!-- City / Town -->
											<label for="checkout_city">City/Town*</label>
											<select name="checkout_city" id="checkout_city" class="dropdown_item_select checkout_input" require="required">
												<option></option>
												<option>City</option>
												<option>City</option>
												<option>City</option>
												<option>City</option>
											</select>
										</div>
										<div>
											<!-- Province -->
											<label for="checkout_province">Province*</label>
											<select name="checkout_province" id="checkout_province" class="dropdown_item_select checkout_input" require="required">
												<option></option>
												<option>Province</option>
												<option>Province</option>
												<option>Province</option>
												<option>Province</option>
											</select>
										</div>
										<div>
											<!-- Phone no -->
											<label for="checkout_phone">Phone no*</label>
											<input type="phone" id="checkout_phone" class="checkout_input" required="required">
										</div>
										<div>
											<!-- Email -->
											<label for="checkout_email">Email Address*</label>
											<input type="phone" id="checkout_email" class="checkout_input" required="required">
										</div>
										<div class="checkout_extra">
											<ul>
												<li class="billing_info d-flex flex-row align-items-center justify-content-start">
													<label class="checkbox_container">
														<input type="checkbox" id="cb_1" name="billing_checkbox" class="billing_checkbox">
														<span class="checkbox_mark"></span>
														<span class="checkbox_text">Terms and conditions</span>
													</label>
												</li>
												<li class="billing_info d-flex flex-row align-items-center justify-content-start">
													<label class="checkbox_container">
														<input type="checkbox" id="cb_2" name="billing_checkbox" class="billing_checkbox">
														<span class="checkbox_mark"></span>
														<span class="checkbox_text">Create an account</span>
													</label>
												</li>
												<li class="billing_info d-flex flex-row align-items-center justify-content-start">
													<label class="checkbox_container">
														<input type="checkbox" id="cb_3" name="billing_checkbox" class="billing_checkbox">
														<span class="checkbox_mark"></span>
														<span class="checkbox_text">Subscribe to our newsletter</span>
													</label>
												</li>
											</ul>
										</div>
									</form>
								</div>
							</div>

							<!-- Cart Total -->
							<div class="cart_total">
								<div class="cart_total_inner checkout_box">
									<div class="checkout_title">Cart total</div>
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

									<!-- Payment Options -->
									<div class="payment">
										<div class="payment_options">
											<label class="payment_option clearfix">Paypal
												<input type="radio" name="radio">
												<span class="checkmark"></span>
											</label>
											<label class="payment_option clearfix">Cach on delivery
												<input type="radio" name="radio">
												<span class="checkmark"></span>
											</label>
											<label class="payment_option clearfix">Credit card
												<input type="radio" name="radio">
												<span class="checkmark"></span>
											</label>
											<label class="payment_option clearfix">Direct bank transfer
												<input type="radio" checked="checked" name="radio">
												<span class="checkmark"></span>
											</label>
										</div>
									</div>

									<!-- Order Text -->
									<div class="order_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pharetra temp or so dales. Phasellus sagittis auctor gravida. Integ er bibendum sodales arcu id te mpus. Ut consectetur lacus.</div>

									<div class="checkout_button trans_200"><a href="checkout.html">place order</a></div>
								</div>
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
	echo $checkout_script;
?>
</body>
</html>