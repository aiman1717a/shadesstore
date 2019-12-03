function addtocart(cart_id, product_id, cart_item_quantity, cart_item_price){
	$.ajax({
	  type: 'GET',
	  url: urladdtocart,
		contentType: "application/x-www-form-urlencoded; charset=UTF-8",
    dataType: "json",
    beforeSend: function(req) {
          req.setRequestHeader("Accept", "application/json");
    },
		data: {
			cart_id:cart_id,
			product_id:product_id,
			cart_item_quantity:cart_item_quantity,
			cart_item_price:cart_item_price
    },
	  success: function(result) {
			 // alert(result);
			if(result["success"] === true){
				notify_success("Added", result["message"]);
			} else {
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
