<?php
	// if(session_status() == PHP_SESSION_NONE){
	// 	session_start();
	// }
?>
<!DOCTYPE html>
<html>
	<head>
		<title> House Of Shades </title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/animate.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/loading.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
		<link rel='stylesheet' href="https://fonts.googleapis.com/css?family=Roboto">
		<script src="<?php echo base_url();?>js/jquery-3.4.1.js"></script>
		<script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
		<script src="<?php echo base_url();?>js/bootstrap-notify.js"></script>
	</head>
	<body>

	<!-- Header -->
	<nav class="navbar navbar-expand-md navbar-light justify-content-center text-center" id="mynavbar">

	<!-- LOGO -->
	  <a class="navbar-brand" href="<?php echo base_url(); ?>">
		<!--<img class="logo" src="img/logo.jpg" alt="Could not find">-->
		House Of Shades
	  </a>
	  <button class="navbar-toggler navbar-light" type="button" data-toggle="collapse" data-target="#collapsibleNavbar" aria-controls="collapsibleNavbar"
        aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="collapsibleNavbar">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item">
				<a class="nav-link" href="<?php echo base_url()?>slideshow">slideshow</a>
			</li>
			<li class="nav-item">
			  <a class="nav-link" href="<?php echo base_url()?>gallary">Gallary</a>
			</li>
			<li class="nav-item">
			  <a class="nav-link" href="<?php echo base_url()?>contactus">Contact Us</a>
			</li>
			<li class="nav-item">
			  <a class="nav-link" href="<?php echo base_url()?>product">Sunglasses</a>
			</li>
		</ul>

		<?php
			if(isset($_SESSION['login_status']) && $_SESSION['login_status'] === true)
			{
				?>
				<ul class="navbar-nav nav-flex-icons align-items">

					<li class="nav-item dropdown mx-auto">

					 	<a class="nav-link dropdown-toggle waves-light" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						 	<i class="far fa-user"></i>
						</a>

					  <div class="dropdown-menu dropdown-menu-right dropdown-default" aria-labelledby="dropdownMenuLinK">
							<a class="dropdown-item" href="<?php echo base_url()?>profile"><span class="fas fa-user"></span> Profile</a>
							<a class="dropdown-item" href="<?php echo base_url()?>account"><span class="fas fa-cog"></span> Account</a>
							<a class="dropdown-item" href="<?php echo base_url()?>shipping"><span class="fas fa-shipping-fast"></span> Shipping</a>
							<a class="dropdown-item" href="<?php echo base_url()?>cart"><span class="fas fa-shopping-cart"></span> Shopping Cart</a>
							<a class="dropdown-item" href="<?php echo base_url()?>logout"><span class="fas fa-sign-out-alt"></span> Logout</a>
					  </div>

						</div>
					</li>
				</ul>
				<?php
			}
			else
			{
				?>
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
					  <a class="nav-link" href="<?php echo base_url()?>register">Sign Up</a>
					</li>
					<li class="nav-item">
						  <a class="nav-link" href="<?php echo base_url()?>login">Sign In</a>
					</li>
				</ul>
				<?php
			}
		?>

	  </div>
	</nav>
	<!-- Header -->
