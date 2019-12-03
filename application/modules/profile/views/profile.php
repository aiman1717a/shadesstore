<!-- Container Start -->
<div class="container mt-5 mb-5">
	<!-- Row Start -->
	<div class="row">
		<div class="col-md-3 pb-3">
			<div class="list-group">
				<a href="#" class="list-group-item list-group-item-action active">Profile</a>
				<a href="<?php echo base_url()?>account" class="list-group-item list-group-item-action">Account</a>
				<a href="<?php echo base_url()?>shipping" class="list-group-item list-group-item-action">Shipping</a>
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
			<div class="row">
		    <div class="card w-100">
	        <div class="card-body">
	          <div class="row">
							<div class="col-md-12">
								<h4>Your Profile</h4>
								<hr>
							</div>
						</div>
	          <div class="row">

							<div class="col-md-12">
								<form class="form" action="#" onsubmit="return false">
									<div class="form-group row">
                    <label for="name" class="col-4 col-form-label">First Name</label>
                    <div class="col-8">
											<div class="row">
												<div class="col-10">
													<input id="fname" name="fname" value="<?php echo $profile['data'][0]['first_name'] ?>" placeholder="First Name" class="form-control here" type="text">
												</div>
												<div class="col-2">
													<button type="button" class="btn btn-block btn-light" id="firstnameupdatebtn" onclick="first_name_reset()">
														<i class="fas fa-undo-alt w-100" aria-hidden="true"></i>
													</button>
												</div>
											</div>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="lastname" class="col-4 col-form-label">Last Name</label>
                    <div class="col-8">
											<div class="row">
												<div class="col-10">
												  <input id="lname" name="lname" value="<?php echo $profile['data'][0]['last_name'] ?>" placeholder="Last Name" class="form-control here" type="text">
												</div>
												<div class="col-2">
													<button type="button" class="btn btn-block btn-light" id="lastnameupdatebtn" onclick="last_name_reset()">
														<i class="fas fa-undo-alt" aria-hidden="true"></i>
													</button>
												</div>
											</div>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="publicinfo" class="col-4 col-form-label">Address</label>
                    <div class="col-8">
											<div class="row">
												<div class="col-10">
												  <textarea id="address" name="address" placeholder="Address" cols="40" rows="4" class="form-control"><?php echo $profile['data'][0]['address'] ?></textarea>
												</div>
												<div class="col-2">
													<button type="button" class="btn btn-block btn-light" id="addressupdatebtn" onclick="address_reset()">
														<i class="fas fa-undo-alt" aria-hidden="true"></i>
													</button>
												</div>
											</div>
                    </div>
                  </div>

                  <div class="form-group row">
										<div class="offset-4 col-8">
											<button type="button" class="btn btn-primary" id="profileUpdateAll">
												Update My Profile
											</button>
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
	<!-- Row End -->
</div>
<!-- Container End -->

<script>
var first_name_previous;
var last_name_previous;
var address_previous;
var url = "<?php echo base_url()?>profile/updateProfile/";
$(document).ready(function(){
	first_name_previous = document.getElementById('fname').value;
	last_name_previous = document.getElementById('lname').value;
	address_previous = document.getElementById('address').value;
});
</script>
<script src="<?php echo base_url();?>js/custom/notify_script.js"></script>
<script src="<?php echo base_url();?>js/custom/profile_page_script.js"></script>
