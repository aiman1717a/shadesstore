<main class="page payment-page">
	<section class="checkout">
		<div class="container">
			<div class="block-heading">
				<h2>Payment</h2>
			</div>
			<form class="form" action="aftercheckout.php" method="POST" id="itemid">
				<div class="row no-gutters">
					<div class="col-12 col-sm-12 col-md-12 col-lg-6">
						<div class="products">
							<h3 class="title">Checkout</h3>
							<?php
							if(!isset($cart))
							{
								?>
								<div class="col text-center h3" style="color: grey">
									<span>Checkout Items is Empty
										<a href="product" class="btn btn-success">
											<i class="fas fa-cart-arrow-down" aria-hidden="true"></i>Products
										</a>
									</span>
								</div>
								<?php
							}
							else
							{
								$grand_total = 0;
								for ($i=0; $i < count($cart['cart_item']) ; $i++) {
									$grand_total = $grand_total + ($cart['cart_item'][$i]['cart_item_quantity'] * $cart['cart_item'][$i]['cart_item_price']);
									?>
									<div class="item">
										<span class="price">$<?php echo $cart['cart_item'][$i]['cart_item_price'] ?></span>
										<p class="item-name"><?php echo $cart['cart_item'][$i]['product_id']['product_name'] ?></p>
										<p class="item-description">Model : <?php echo $cart['cart_item'][$i]['product_id']['product_number'] ?></p>
									</div>

								<?php
								}

							}
							?>
							<div class="total">Total<span class="price">$<?php echo isset($grand_total) != null ? $grand_total : 0 ?></span></div>
						</div>
					</div>
					<div class="col-12 col-sm-12 col-md-12 col-lg-6">
						<div class="card-details">
							<h3 class="title">Credit Card Details</h3>
							<div class="row">

									<div class="form-group col-sm-7">
										<label for="card-holder">Card Holder</label>
										<input id="card-holder" name="card-holder" type="text" class="form-control" placeholder="Card Holder" aria-label="Card Holder" aria-describedby="basic-addon1" required>
									</div>
									<div class="form-group col-sm-5">
										<label for="">Expiration Date</label>
										<div class="input-group expiration-date">
											<input type="text" name="MM" class="form-control" placeholder="MM" aria-label="MM" aria-describedby="basic-addon1" required>
											<span class="date-separator">/</span>
											<input type="text" name="YY" class="form-control" placeholder="YY" aria-label="YY" aria-describedby="basic-addon1" required>
										</div>
									</div>
									<div class="form-group col-sm-8">
										<label for="card-number">Card Number</label>
										<input id="card-number" name="card-number" type="text" class="form-control" placeholder="Card Number" aria-label="Card Holder" aria-describedby="basic-addon1" required>
									</div>
									<div class="form-group col-sm-4">
										<label for="cvc">CVC</label>
										<input id="cvc" name="cvc" type="text" class="form-control" placeholder="CVC" aria-label="Card Holder" aria-describedby="basic-addon1" required>
									</div>
									<?php
									if(isset($cart))
									{
									?>
										<div class="form-group col-sm-12">
											<button type="button" class="btn btn-primary btn-block">Proceed</button>
										</div>
									<?php
									}
									?>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</section>
</main>
