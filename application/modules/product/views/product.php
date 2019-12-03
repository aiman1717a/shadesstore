<style>
	.container h1{
		text-align: center;
	}
</style>
<?php

?>
<div class="container-fluid mt-2 mb-2">
	<div class="row justify-content-center">
		<div class="col-12 col-md-10 col-lg-8">
			<form class="form">
				<div class="card-body row align-items-center">

					<div class="col">
						<input class="search-bar form-control form-control-lg form-control-borderless" id="search" type="search" placeholder="Search Sunglasses by name">
					</div>
					<div class="col-auto mx-2">
						<a href="#" class="btn btn-default btn-block" id="search_link" onclick="search_products()">
							<button class="btn btn-lg btn-success" type="button">
								<span class="fa fa-search"></span>Search
							</button>
						</a>
					</div>

				</div>
			</form>
		</div>
	</div>
</div>


<div class="container">
	<div class="row">

		<div class="col-lg-3">
			<?php
			if(isset($brands_filteration_view)){
				echo $brands_filteration_view;
			}
			?>
		</div>

		<div class="col-lg-9">
			<div class="container">
				<div id="products" class="row view-group">
						<?php
						if(isset($product_view)){
							echo $product_view;
						}
						?>
				</div>
			</div>
		</div>

	</div>
</div>
<script>
function search_brands(){
	var sel = document.getElementById('brandoptions');
	var opt = sel.options[sel.selectedIndex];
	document.getElementById("link").href="<?php echo base_url()?>product/searchbybrand/"+ opt.text;
	return true
}

function search_products(){
	var input = document.getElementById('search').value;
	document.getElementById("search_link").href="<?php echo base_url()?>product/searchbyproduct/"+ input;
	return true
}
</script>
