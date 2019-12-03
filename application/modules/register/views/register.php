<div class="frmContainer container">
	<div class="row justify-content-center">

		<div class="frmContainer-login col-sm">
			<h1>Register</h1>
			<form class = "frm" action = "" onsubmit="return false">
				<div class="form-group">
					<label for="user_name">User Name<span style="color:#ff0000;">*</span></label>
					<input type="text" class="form-control" id="user_name" placeholder="Enter your user name">
					<small id="error" class="form-text text-muted"></small>
				</div>

				<div class="form-group">
					<label for="user_email">Email<span style="color:#ff0000;">*</span></label>
					<input type="text" class="form-control" id="user_email" placeholder="Enter your email">
				</div>

				<div class="form-group">
					<label for="user_password">Password<span style="color:#ff0000;">*</span></label>
					<input type="password" class="form-control" id="user_password" placeholder="Enter your Password">
					<small id="emailHelp" class="form-text text-muted">Your Password is veryy safe :-)</small>
				</div>

				<button type="button" class="btn btn-success" id="btnregister">Sign Up</button>
				<div class="form-group">
					<?php echo $loading_view ?>
				</div>
				<script>
					$(document).on('click', '#btnregister', function() {
						var user_name = $('#user_name').val();
						var user_email = $('#user_email').val();
						var user_password = $('#user_password').val();
						if(user_name != null && user_email != null && user_password != null){
								register(user_name, user_email, user_password);
									$('#circle').css('display', 'block');
						}
					});
				</script>
			</form>
		</div>

		<div class="frmContainer-register col-sm">
			<h1>Sign In</h1>
			<p>Access Your Account and see through better</p>
			<a href="login">
				<button class="btn btn-dark">Sign In</button>
			</a>
		</div>

	</div>
</div>
<script>
var url_register = "<?php echo base_url()?>register/sign_up";
</script>

<script src="<?php echo base_url();?>js/custom/notify_script.js"></script>
<script src="<?php echo base_url();?>js/custom/register_script.js"></script>
