<style>
.error {
  margin: 0 auto;
  text-align: center;
}

.error-code {
  bottom: 60%;
  color: #2d353c;
  font-size: 96px;
  line-height: 100px;
}

.error-desc {
  font-size: 12px;
  color: #647788;
}

.m-b-10 {
  margin-bottom: 10px!important;
}

.m-b-20 {
  margin-bottom: 20px!important;
}

.m-t-20 {
  margin-top: 20px!important;
}

</style>
<div class="error">
	<div class="error-code m-b-10 m-t-20">404 <i class="fa fa-warning"></i></div>
	<h3 class="font-bold">We couldn't find the page..</h3>

	<div class="error-desc">
		Sorry, but the page you are looking for was either not found or does not exist. <br/>
		Try refreshing the page or click the button below to go back to the Homepage.
		<div>
			<a class=" login-detail-panel-button btn" href="<?php echo base_url()?>pages/view/home">
					<i class="fa fa-arrow-left"></i>
					Go back to Homepage
				</a>
		</div>
	</div>
</div>
