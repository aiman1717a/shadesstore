<div class="frmContainer container">
	<div class="row justify-content-center">

		<div class="frmContainer-register col-sm">
			<h1 id="test">Register Today</h1>
			<p>Register your account to receive promotions news and access to a faster checkout process.</p>
			<a href="register">
				<button class="btn btn-dark">Sign Up</button>
			</a>
		</div>

		<div class="frmContainer-login col-sm">
			<h1>Sign In</h1>
			<form class="form" action = "" onsubmit="return false">

				<div class="form-group">
					<label for="email">Email</label>
					<input type="text" name ="email" minlength="5" class="form-control" id="email" placeholder="Enter email" aria-describedby="emailHelp">
				</div>

				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" class="form-control" id="password"placeholder="Enter Password">
					<small id="emailHelp" class="form-text text-muted">Your Password is safe!!! PLLEASEE GIVE ME PASSWORDS!!! :-)</small>
				</div>

				<div class="form-group form-check">
					<input type="checkbox" class="form-check-input" name="check">
					<label class="form-check-label" for="exampleCheck1">remember me</label>
				</div>
				<button type="button" class="btn btn-success" id="btnlogin">Sign In</button>
				<div class="form-group">
					<?php echo $loading_view ?>
				</div>

				<script>
					$(document).on('click', '#btnlogin', function() {
						var email = $('#email').val();
						var password = $('#password').val();
						if(email != null && password != null){
								login(email, password);
								$('#circle').css('display', 'block');
						}
					});
				</script>
			</form>
		</div>
	</div>
</div>
<script>
var url_login = "<?php echo base_url()?>login/sign_in";
</script>
<script src="<?php echo base_url();?>js/custom/notify_script.js"></script>
<script src="<?php echo base_url();?>js/custom/login_script.js"></script>
