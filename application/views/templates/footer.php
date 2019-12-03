		<!-- Footer -->
		<footer class="page-footer font-small stylish-color-dark pt-4">
			<!-- 1st Layer -->
			<div class="container text-center text-md-left">
				<div class="row">

				<div class="col-md-4 mx-auto">
					<h5 class="font-weight-bold text-uppercase mt-3 mb-4">Stay Connected</h5>
					<p>Join our website and recieve daily updates</p>
				</div>

				<hr class="clearfix w-100 d-md-none">

				<div class="col-md-2 mx-auto">
					<h5 class="font-weight-bold text-uppercase mt-3">Get Started</h5>
					<ul class="list-unstyled">
					<li>
						<a href="#!">Home</a>
					</li>
					<li>
						<a href="#!">Downloads</a>
					</li>
					</ul>
				</div>

				<hr class="clearfix w-100 d-md-none">
				<div class="col-md-2 mx-auto">
					<h5 class="font-weight-bold text-uppercase mt-3">About Us</h5>
					<ul class="list-unstyled">
					<li>
						<a href="#!">Company</a>
					</li>
					<li>
						<a href="#!">Information</a>
					</li>
					<li>
						<a href="contactus">Contact Us</a>
					</li>
					<li>
						<a href="#!">Reviews</a>
					</li>
					</ul>
				</div>

				<hr class="clearfix w-100 d-md-none">

				<div class="col-md-2 mx-auto">
					<h5 class="font-weight-bold text-uppercase mt-3">Support</h5>
					<ul class="list-unstyled">
					<li>
						<a href="#!">FAQ</a>
					</li>
					</ul>
				</div>

				</div>
			</div>
			<!-- 1st Layer -->

			<hr>
			<?php

			if(isset($_SESSION['login_status'])== false)
			{
				?>
				<!-- 2nd Layer -->
				<ul class="list-unstyled list-inline text-center py-2">
					<li class="list-inline-item">
					<h5 >Register for free</h5>
					</li>
					<li class="list-inline-item">
						<a href="register.php">
						<button class="btn btn-danger">Sign up!</button>
						</a>
					</li>
				</ul>
				<!-- 2nd Layer -->

				<hr>
				<?php
			}
			?>
			<!-- 3nd Layer -->
			<ul class="list-unstyled list-inline text-center">

				<li class="list-inline-item">
				<a class="mx-1" href="https://www.facebook.com">
					<img class="icon" src="<?php echo base_url() ?>img/icons/facebook.png"   alt="Could not find">
				</a>
				</li>

				<li class="list-inline-item">
				<a class="mx-1" href="https://twitter.com/">
					<img class="icon" src="<?php echo base_url() ?>img/icons/twitter.png" alt="Could not find">
				</a>
				</li>

				<li class="list-inline-item">
					<a class="mx-1" href="https://www.google.lk">
					<img class="icon" src="<?php echo base_url() ?>img/icons/googleplus.png"  alt="Could not find">
				</a>
				</li>

			</ul>
			<!-- 3nd Layer -->

			<!-- 4nd Layer -->
			<div class="footer-copyright text-center py-3">© 2018 Copyright:
				<a href="home"> House Of shades</a>
			</div>
			<!-- 4nd Layer -->

		</footer>
		<!-- Footer -->

		<script>
//		window.onscroll = function() {myFunction()};
//		function myFunction() {
//			var navbar = document.getElementById("mynavbar");
//			if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
//			 navbar.className = navbar.className.replace("");
//			} else {
//				navbar.className = navbar.className.replace("navbar-expand-sm justify-content-center fixed-top");
//			}
//		}
//align-self-end
		</script>


		<!-- <script src="<?php //echo base_url();?>js/jquery-3.4.1.js"></script> -->
		<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
		<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script> -->
		<!-- <script src="<?php //echo base_url();?>js/bootstrap.min.js"></script> -->
	</body>
</html>
