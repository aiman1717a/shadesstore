function delete_cart_item(cart_item_id){
   //console.log(cart_item_id);
	$.ajax({
	  type: 'GET',
	  url: url_delete,
		contentType: "application/x-www-form-urlencoded; charset=UTF-8",
    dataType: "json",
    beforeSend: function(req) {
            req.setRequestHeader("Accept", "application/json");
    },
		data: {
			cart_item_id:cart_item_id
    },
	  success: function(result) {
			//alert(result);
			if(result["success"] === true){
				notify_success("Deleted", result["message"]);
				document.location.reload(true);
			}else{
				notify_error("Error", result["message"]);
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
}
