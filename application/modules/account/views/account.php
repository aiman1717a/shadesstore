<!-- Container Start -->
<div class="container main mt-5 mb-5">
	<!-- Row Start -->
	<div class="row">
		<div class="col-md-3">
			<div class="list-group">
				<a href="<?php echo base_url()?>profile" class="list-group-item list-group-item-action">Profile</a>
				<a href="#" class="list-group-item list-group-item-action active">Account</a>
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
			<div class="card">
				<div class="card-body">
					<div class="row">
						<div class="col-md-12">
							<h4>Your Account</h4>
							<hr>
						</div>
					</div>
          <div class="row">
            <div class="col-md-12">
							<form class="form" action="#" onsubmit="return false">
								<div class="form-group row">
									<label for="username" class="col-4 col-form-label">User Name</label>
									<div class="col-8">
										<input id="user_name" name="user_name" value="<?php echo $account['data'][0]['user_name'] ?>" placeholder="Username" class="form-control here" required type="text">
									</div>
								</div>
								<div class="form-group row">
                	<label for="email" class="col-4 col-form-label">Email<span style="color:#ff0000;">*</span></label>
                  <div class="col-8">
                    <input id="email" name="email" value="<?php  echo $account['data'][0]['user_email'] ?>" placeholder="Email" class="form-control here" required type="text">
                  </div>
                </div>
               	<div class="form-group row">
                  <label for="newpass" class="col-4 col-form-label">Current Password<span style="color:#ff0000;">*</span></label>
                  <div class="col-8">
                    <input id="current_password" name="current_password" value="" placeholder="Current Password" class="form-control here" type="text">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="newpass" class="col-4 col-form-label">New Password</label>
                  <div class="col-8">
                    <input id="new_password" name="new_password" placeholder="New Password" class="form-control here" type="text">
                  </div>
                </div>
               	<div class="form-group row">
                  <label for="newpass" class="col-4 col-form-label">Confirm Password</label>
                  <div class="col-8">
                    <input id="confirm_password" name="confirm_password" placeholder="Confirm Password" class="form-control here" type="text">
                  </div>
                </div>
								<div class="form-group row">
								 <label for="newpass" class="col-4 col-form-label"></label>
								 <div class="col-8">
									 <label class"mt-5"><span style="color:#ff0000;">Password update service is currently unavailable</span></label>
								 </div>
							 </div>
                <div class="form-group row">
                  <div class="offset-4 col-8">
                    <button type="button" class="btn btn-primary" id="accountUpdateAll">Update My Account</button>
                  </div>
                </div>
              </form>
            </div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Row End -->
</div>
<!-- Container Start -->

<script>
var user_name_previous;
var email_previous;
var password_previous;
var url = "<?php echo base_url()?>account/updateAccount/";
$(document).ready(function(){
	user_name_previous = document.getElementById('user_name').value;
	email_previous = document.getElementById('email').value;
	// password_previous = document.getElementById('new_password').value;
	console.log(user_name_previous);
	console.log(email_previous);
});
</script>
<script src="<?php echo base_url();?>js/custom/notify_script.js"></script>
<script src="<?php echo base_url();?>js/custom/account_page_script.js"></script>
