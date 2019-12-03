<style>
	.navbar{
		position: relative !important;
	}
	form{
		margin-top: 10px;
		margin-bottom: 10px;
		border-radius: 10px;
		padding: 20px;
		background-color: #f2f2f2;
	}
	form h2{
		font-size: 40px
	}
</style>


<!-- Contact Form -->
<div class="container">
  <form action="/action_page.php">
  <h2>Contact Us</h2>
	<div class="form-group">
	  <label for="fname">First Name:</label>
	  <input type="text" class="form-control" id="fname" placeholder="Enter Your First Name" name="fname">
	</div>

	<div class="form-group">
	  <label for="lname">Last Name:</label>
	  <input type="text" class="form-control" id="lname" placeholder="Enter Your Last Name" name="lname">
	</div>

	<div class="form-group">
		<label for="country">Country:</label>
		<select class="form-control">
		  <option value="australia">Australia</option>
		  <option value="canada">Canada</option>
		  <option value="usa">USA</option>
		</select>
	</div>
	<div class="form-group">
		<label for="subject">Subject</label>
		<textarea class="form-control" id="subject" name="subject" placeholder="Write something..." rows="5"></textarea>
	</div>
	<button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
<!-- Contact Form -->
