<div class="container main mt-5 mb-5">
	<div class="row">
		<div class="col-md-3">
			<div class="list-group">

				<a href="<?php echo base_url()?>profile" class="list-group-item list-group-item-action">Profile</a>
				<a href="<?php echo base_url()?>account" class="list-group-item list-group-item-action">Account</a>
				<a href="#" class="list-group-item list-group-item-action active">Shipping</a>
				<a href="<?php echo base_url()?>cart" class="list-group-item list-group-item-action">Shopping Cart</a>
				<a href="#" class="list-group-item list-group-item-action">Enquiry</a>
				<a href="#" class="list-group-item list-group-item-action">Dealer</a>
				<a href="#" class="list-group-item list-group-item-action">Media</a>
				<a href="#" class="list-group-item list-group-item-action">Post</a>
				<a href="#" class="list-group-item list-group-item-action">Category</a>
				<a href="#" class="list-group-item list-group-item-action">New</a>
				<a href="#" class="list-group-item list-group-item-action">Comments</a>
				<a href="#" class="list-group-item list-group-item-action">Appearance</a>
				<a href="#" class="list-group-item list-group-item-action">Settings</a>

			</div>
		</div>
		<div class="col-md-9">
		    <div class="card">
		        <div class="card-body">
		            <div class="row">
		                <div class="col-md-12">
		                    <h4>Your Shipping Details</h4>
		                    <hr>
		                </div>
		            </div>
		            <div class="row">
		                <div class="col-md-12">
		                    <form class="form" action="#" onsubmit="return false">
													<div class="form-group row">
                                <label for="username" class="col-4 col-form-label">Shipping Place</label>
                                <div class="col-8">
                                  <input id="shipping_place" name="shipping_place" value="<?php echo isset($shipping) ? $shipping['data'][0]['shipping_place'] : null ?>" placeholder="Shipping Place" class="form-control here" required="required" type="text">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="email" class="col-4 col-form-label">Shipping Street</label>
                                <div class="col-8">
                                  <input id="shipping_street" name="shipping_street" value="<?php echo isset($shipping) ? $shipping['data'][0]['shipping_street'] : null ?>" placeholder="Shipping Street" class="form-control here" required="required" type="text">
                                </div>
                              </div>
                               <div class="form-group row">
                                <label for="newpass" class="col-4 col-form-label">Shipping City</label>
                                <div class="col-8">
                                  <input id="shipping_city" name="shipping_city" value="<?php echo isset($shipping) ? $shipping['data'][0]['shipping_city'] : null ?>" placeholder="Shipping City" class="form-control here" type="text">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="newpass" class="col-4 col-form-label">Shipping Country</label>
                                <div class="col-8">
                                   <input id="shipping_country" name="shipping_country" value="<?php echo isset($shipping) ? $shipping['data'][0]['shipping_country'] : null ?>" placeholder="Shipping Country" class="form-control here" type="text">
                                </div>
                              </div>
                               <div class="form-group row">
                                <label for="newpass" class="col-4 col-form-label">Shipping Zip</label>
                                <div class="col-8">
                                 <input id="shipping_zip" name="shipping_zip" value="<?php echo isset($shipping) ? $shipping['data'][0]['shipping_zip'] : null ?>" placeholder="Shipping Zip" class="form-control here" type="text">
                                </div>
                              </div>
                              <div class="form-group row">
                                <div class="offset-4 col-8">
                                  <button type="button" class="btn btn-primary" id="profileShippingAll">Update My Account</button>
                                </div>
                              </div>
                            </form>
		                </div>
		            </div>

		        </div>
		    </div>
		</div>
	</div>
</div>

<script>
var shipping_id;
var shipping_place_previous;
var shipping_street_previous;
var shipping_city_previous;
var shipping_country_previous;
var shipping_zip_previous;
var url = "<?php echo base_url()?>shipping/updateShipping/";
$(document).ready(function(){
	shipping_id = "<?php echo isset($shipping) ? $shipping['data'][0]['shipping_id'] : null?>";
	shipping_place_previous = document.getElementById('shipping_place').value;
	shipping_street_previous = document.getElementById('shipping_street').value;
	shipping_city_previous = document.getElementById('shipping_city').value;
	shipping_country_previous = document.getElementById('shipping_country').value;
	shipping_zip_previous = document.getElementById('shipping_zip').value;

	console.log(shipping_id);
	console.log(shipping_place_previous);
	console.log(shipping_street_previous);
	console.log(shipping_city_previous);
	console.log(shipping_country_previous);
	console.log(shipping_zip_previous);
});
</script>
<script src="<?php echo base_url();?>js/custom/notify_script.js"></script>
<script src="<?php echo base_url();?>js/custom/shipping_page_script.js"></script>
