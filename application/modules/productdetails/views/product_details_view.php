<style>
	.card{
		box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.075);
	}
	.details{
		background-color: #f7fbff;
	}

</style>
<form class="form" action="#" onsubmit="return false">
	<div class="container mt-5 mb-5 card">

		<div class="row">
			<aside class="col-12 col-sm-12 col-md-4 m-auto img">
				<h1 class="title mb-3 text-center"><?php echo isset($product['data']) ? $product['data']['product_name'] : null ?></h3>
				<hr>
				<img src="<?php echo base_url(); echo isset($product['data']) ? $product['data']['product_image'] : null ?>" class="imgs w-100 p-5">
				<hr>
			</aside>

			<aside class="col-12 col-sm-12 col-md-8 border-left card-body p-5 details">
					<article class="card-body p-5">
						<h3 class="title mb-3"><?php echo isset($product['data']) ? $product['data']['product_name'] : null ?></h3>
						<p class="price-detail-wrap">
							<span class="price h3 text-warning">
								<span class="currency">US $</span>
								<span class="num"><?php echo isset($product['data']) ? $product['data']['product_price'] : null ?></span>
							</span>
							<span>/per item</span>
						</p>

						<dl class="param param-feature">
							<dt>Model#</dt>
							<dd><?php echo isset($product['data']) ? $product['data']['product_number'] : null ?></dd>
						</dl>

						<dl class="param param-feature">
							<dt>Brand</dt>
							<dd><?php echo isset($brand['data']) ? $brand['data']['brand_name'] : null ?></dd>
						</dl>

						<hr>
						<div class="row">
							<div class="col-sm-5">
								<dl class="param param-inline">
									<dt>
										Quantity:
									</dt>
									<dd>
										<input type="number" class="form-control" id="qty" value="1" name="item_quantity" min="0" max="<?php echo isset($product['data']) ? $product['data']['product_qty'] : null ?>">
									</dd>
								</dl>
							</div>
						</div>
						<hr>
						<?php
							if(isset($_SESSION['user_id'])){
								?>
								<button type="button" class="btn btn-lg btn-outline-primary text-uppercase m-1" name="item">
									Buy Now
								</button>

								<button type="button" class="btn btn-lg btn-outline-success text-uppercase m-1" id=btnaddtocart>
									<span class="fa fa-shopping-cart"></span>
									Add to cart
								</button>
								<script>
									$(document).on('click', '#btnaddtocart', function() {
										var cart_id = <?php echo isset($cart['data']) ? $cart['data']['cart_id'] : null ?>;
										var product_id = <?php echo isset($product['data']) ? $product['data']['product_id'] : null ?>;
										var cart_item_quantity = $('#qty').val();
										var cart_item_price = <?php echo isset($product['data']) ? $product['data']['product_price'] : null ?>;
										if(cart_id !== null){
											// console.log(cart_id);
											// console.log(product_id);
											// console.log(cart_item_quantity);
											// console.log(cart_item_price);
											addtocart(cart_id, product_id, cart_item_quantity, cart_item_price);
										}
									});
								</script>
								<a href="../cart" class="btn btn-lg btn-success text-uppercase m-1">
									<span class="fa fa-shopping-cart"></span>
								</a>
								<?php
							}
						?>

					</article>
			</aside>

		</div>
	</div>
</form>

<script>
var urladdtocart = "<?php echo base_url();?>product_details_view/addtocart/";
</script>
<script src="<?php echo base_url();?>js/custom/notify_script.js"></script>
<script src="<?php echo base_url();?>js/custom/add_to_cart_script.js"></script>
