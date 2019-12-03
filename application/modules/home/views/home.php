<style>
	.parallax1 {
		/* Set a specific height */
 		/* min-height: 750px; */
 		height: 200px;

		/* The image used */
	 background-image: url("<?php echo base_url(); ?>img/parralax2.jpg");
	 /* Create the parallax scrolling effect */
	 background-attachment: scroll;
	 background-position: center;
	 background-repeat: no-repeat;
	 background-size: cover;
	}

	.parallax2 {
		/* Set a specific height */
		/* min-height: 750px; */
		height: 200px;

		/* The image used */
		background-image: url("<?php echo base_url(); ?>img/banner.jpg");
		/* Create the parallax scrolling effect */
		background-attachment: scroll;
		background-position: center;
		background-repeat: no-repeat;
		background-size: cover;
	}

	.brand{
		border-bottom: 3px solid;
		width: 100%;
	}
	.location{
		border-bottom: 3px solid green;
	}
	.poster{
		background-color: #1E1E1E;
		height: auto;
	}

	.poster-text{
		text-align: center;
		font-size: 20px;
		color: #FFFFFF;
		margin: 10px;
		padding: 15px 0px;
	}
	.qt_text{
		font-size: 1.04rem;
	}

</style>

<div class="container-fluid">
	<div class="row parallax1">
	</div>
	<div class="row">
		<div class="col">
			<div class="text-center text-dark my-5 qt_text">
				<q> Look Forward, See Everything </q>
			</div>
		</div>
	</div>
	<div class="row parallax2">
	</div>
</div>

<div class="h1 text-center text-dark mt-5">
	Our Brands
</div>
<div class="container my-2">
	<div class="row">
		<div class="col-6 col-sm-4 my-3 text-center">
			<a href="product/searchbybrand/Rayban">
				<button class="btn" style="padding: 0px">
					<img src="<?php echo base_url(); ?>img/brands/oaklay edited.jpg" alt="Image Not Found" class="brand w-100 rounded"/>
				</button>
			</a>
		</div>
		<div class="col-6 col-sm-4 my-3 text-center">
			<a href="product/searchbybrand/Carrera">
				<button class="btn" style="padding: 0px">
					<img src="<?php echo base_url(); ?>img/brands/rayban edited.jpg" alt="Image Not Found" class="brand w-100 rounded"/>
				</button>
			</a>
		</div>
		<div class="col-6 col-sm-4 my-3 text-center">
			<a href="product/searchbybrand/Armani">
				<button class="btn" style="padding: 0px">
					<img src="<?php echo base_url(); ?>img/brands/armani edited.jpg" alt="Image Not Found" class="brand w-100 rounded"/>
				</button>
			</a>
		</div>
		<div class="col-6 col-sm-4 my-3 text-center">
			<a href="product/searchbybrand/Burberry">
				<button class="btn" style="padding: 0px">
					<img src="<?php echo base_url(); ?>img/brands/blurberry.jpg" alt="Image Not Found" class="brand w-100 rounded"/>
				</button>
			</a>
		</div>
		<div class="col-6 col-sm-4 my-3 text-center">
			<a href="product/searchbybrand/Carrera">
				<button class="btn" style="padding: 0px">
					<img src="<?php echo base_url(); ?>img/brands/carrera edited.jpg" alt="Image Not Found" class="brand w-100 rounded"/>
				</button>
			</a>
		</div>
		<div class="col-6 col-sm-4 my-3 text-center">
			<a href="product/searchbybrand/Raph Lauren">
				<button class="btn" style="padding: 0px">
					<img src="<?php echo base_url(); ?>img/brands/raph lauren.jpg" alt="Image Not Found" class="brand w-100 rounded"/>
				</button>
			</a>
		</div>
	</div>
</div>
<hr>
<div class="h3 text-center text-dark mt-5">Our Branches</div>
<div class="container my-2">
	<div class="row">
		<div class="col-6 col-sm-4 my-3">
			<div class="location card">
			 	<a href="https://en.wikipedia.org/wiki/Paris" target="_blank">
				 	<img src="<?php echo base_url(); ?>img/locations/china.jpg" alt="Avatar" class="w-100 rounded">
				</a>
				<div class="container">
				<div class="h3 text-center text-dark m-2">China</div>
				</div>
			</div>
		</div>
		<div class="col-6 col-sm-4 my-3">
			<div class="location card">
		  		<a href="https://en.wikipedia.org/wiki/China" target="_blank">
			  		<img src="<?php echo base_url(); ?>img/locations/paris.jpg" alt="Avatar" class="w-100 rounded">
			 	</a>
			  	<div class="container">
			  	<div class="h3 text-center text-dark m-2">Paris</div>
			  	</div>
			</div>
		</div>
		<div class="col-12 col-sm-4 my-3">
			<div class="location card">
				<a href="https://en.wikipedia.org/wiki/China" target="_blank">
					<img src="<?php echo base_url(); ?>img/locations/india.jpeg" alt="Avatar" class="w-100 rounded">
				</a>
					<div class="container">
					<div class="h3 text-center text-dark m-2">India</div>
					</div>
			</div>
		</div>
	</div>
</div>
<hr>
<div class="container mt-5">
   <h3 class="text-center text-uppercase">contact us</h3>
   <p class="text-center w-75 m-auto">Everyone is a customer to us, So feel free to Contact Us</p>
   <div class="row">
	 <div class="col-sm-12 col-md-12 col-lg-4 my-5">
	   <div class="card border-0">
		  <div class="card-body text-center">
			<i class="fa fa-phone fa-5x mb-3" aria-hidden="true"></i>
			<h4 class="text-uppercase mb-5">call us</h4>
			<p>+8801683615582, +8801750603409</p>
		  </div>
		</div>
	 </div>
	 <div class="col-sm-12 col-md-12 col-lg-4 my-5">
	   <div class="card border-0">
		  <div class="card-body text-center">
			<i class="fa fa-map-marker fa-5x mb-3" aria-hidden="true"></i>
			<h4 class="text-uppercase mb-5">office loaction</h4>
		   <address>Suite 02, Level 12, Sahera Tropical Center </address>
		  </div>
		</div>
	 </div>
	 <div class="col-sm-12 col-md-12 col-lg-4 my-5">
	   <div class="card border-0">
		  <div class="card-body text-center">
			<i class="fa fa-globe fa-5x mb-3" aria-hidden="true"></i>
			<h4 class="text-uppercase mb-5">email</h4>
			<p>aiman1717a@gmail.com</p>
		  </div>
		</div>
	 </div>
   </div>
</div>

<div class="poster container-fluid">
	<div class="container">
		<div class="row">
			<div class="poster-text col-sm">
				Stay up to date with all the latest Trends
			</div>
		</div>
	</div>
</div>
