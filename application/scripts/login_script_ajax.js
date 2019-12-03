<script>
$(document).ready(function() {
	$(".form").submit(function(event) {
		event.preventDefault();
		var _form = $(this);
		var data = _form.serialize();
		var url = _form.attr('action');

		$.ajax({
		  type: 'POST',
		  url: url,
			contentType: "application/x-www-form-urlencoded; charset=UTF-8",
		  dataType: "json",
			beforeSend: function(req) {
							req.setRequestHeader("Accept", "application/json");
			},
			data: data,
		  success: function(result) {
				 alert(result["data"]["user_id"]);
				 if(result["success"])
				 {
					 //what would be your suggestion here in order to set a session?
				 }
			},
			error:function(x,e) {
			    if (x.status==0) {
			        alert('You are offline!!\n Please Check Your Network.');
			    } else if(x.status==404) {
			        alert('Requested URL not found.');
			    } else if(x.status==500) {
			        alert('Internel Server Error.');
			    } else if(e=='parsererror') {
			        alert('Error.\nParsing JSON Request failed.');
			    } else if(e=='timeout'){
			        alert('Request Time out.');
			    } else {
			        alert('Unknow Error.\n'+x.responseText);
			    }
				}
		});
	});
});
</script>
