<style>
	.navbar{
		position: relative !important;
	}
	.carousel{
		width: auto;
	}
	.carousel-inner img {
    display: block;
		height: 600px;
    margin-left: auto;
    margin-right: auto;
	}
	.carousel-control-prev{
    width: 10%;
		background-color: black;
	}
	.carousel-control-next{
    width: 10%;
		background-color: black;
	}
	.col-sm {
		padding: 5px;
	}
	.content{
		margin-top: 10px;
		margin-bottom: 10px;
	}
	/* #img1{
		width:auto;
		height: 600px;
	}
	#img2{
		width:auto;
		height: 600px;
	} */

</style>

<!-- Slide -->
	<div id="demo" class="carousel slide" data-ride="carousel">

	  <!-- Indicators -->
	  <ul class="carousel-indicators">
		<li data-target="#demo" data-slide-to="0" class="active"></li>
		<li data-target="#demo" data-slide-to="1"></li>
		<li data-target="#demo" data-slide-to="2" class="active"></li>
		<li data-target="#demo" data-slide-to="3"></li>
		<li data-target="#demo" data-slide-to="4" class="active"></li>
		<li data-target="#demo" data-slide-to="5"></li>
	  </ul>

	  <!-- The slideshow -->
	  <div class="carousel-inner">
			<div class="carousel-item active">
			  <img id="img" src="<?php echo base_url()?>img/original/carrera.jpg" alt="Carrera not found">
			</div>
			<div class="carousel-item">
			  <img id="img" src="<?php echo base_url()?>img/original/chicago.jpg" alt="Oaklay not found">
			</div>
			<div class="carousel-item">
			  <img id="img" src="<?php echo base_url()?>img/original/oaklay.jpg" alt="Oaklay not found">
			</div>
			<div class="carousel-item">
			  <img id="img" src="<?php echo base_url()?>img/original/rayban.jpg" alt="Oaklay not found">
			</div>
			<div class="carousel-item">
			  <img id="img" src="<?php echo base_url()?>img/original/men.jpg" alt="Oaklay not found">
			</div>
			<div class="carousel-item">
			  <img id="img" src="<?php echo base_url()?>img/original/women2.png" alt="Oaklay not found">
			</div>
	  </div>

	  <!-- Left and right controls -->
	  <a class="carousel-control-prev" href="#demo" data-slide="prev">
			<span class="carousel-control-prev-icon"></span>
			<span class="sr-only">Previous</span>
	  </a>
	  <a class="carousel-control-next" href="#demo" data-slide="next">
			<span class="carousel-control-next-icon"></span>
			<span class="sr-only">Next</span>
	  </a>
	</div>
<!-- Slide -->
