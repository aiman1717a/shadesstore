function reset(){
	document.getElementById('shipping_place').value = shipping_place_previous;
	document.getElementById('shipping_street').value = shipping_street_previous;
	document.getElementById('shipping_city').value = shipping_city_previous;
	document.getElementById('shipping_country').value = shipping_country_previous;
	document.getElementById('shipping_zip').value = shipping_zip_previous;
}

$(document).on('click', '#profileShippingAll', function(){
	var shipping_place_current = document.getElementById('shipping_place').value;
	var shipping_street_current = document.getElementById('shipping_street').value;
	var shipping_city_current = document.getElementById('shipping_city').value;
	var shipping_country_current = document.getElementById('shipping_country').value;
	var shipping_zip_current = document.getElementById('shipping_zip').value;



	//first_name
	if(shipping_place_current != shipping_place_previous){
		var shipping_place = shipping_place_current;
	}else{
		var shipping_place = null;
	}

	//first_name
	if(shipping_street_current != shipping_street_previous){
		var shipping_street = shipping_street_current;
	}else{
		var shipping_street = null;
	}

	//first_name
	if(shipping_city_current != shipping_city_previous){
		var shipping_city = shipping_city_current;
	}else{
		var shipping_city = null;
	}

	//first_name
	if(shipping_country_current != shipping_country_previous){
		var shipping_country = shipping_country_current;
	}else{
		var shipping_country = null;
	}

	//first_name
	if(shipping_zip_current != shipping_zip_previous){
		var shipping_zip = shipping_zip_current;
	}else{
		var shipping_zip = null;
	}

	console.log(shipping_place);
	console.log(shipping_street);
	console.log(shipping_city);
	console.log(shipping_country);
	console.log(shipping_zip);

	$.ajax({
	  type: 'GET',
	  url: url,
		contentType: "application/x-www-form-urlencoded; charset=UTF-8",
    dataType: "json",
    beforeSend: function(req) {
          req.setRequestHeader("Accept", "application/json");
    },
		data: {
			shipping_id:shipping_id,
			shipping_place:shipping_place,
			shipping_street:shipping_street,
			shipping_city:shipping_city,
			shipping_country:shipping_country,
			shipping_zip:shipping_zip
    },
	  success: function(result) {
			for (var i = 0; i < result.length; i++) {
				if(result[i]["success"]){

					if("shipping_place" in result[i]["data"]){
						shipping_place_previous = result[i]["data"]["shipping_place"];
					}
					if("shipping_street" in result[i]["data"]){
						shipping_street_previous = result[i]["data"]["shipping_street"];
					}
					if("shipping_city" in result[i]["data"]){
						shipping_city_previous = result[i]["data"]["shipping_city"];
					}
					if("shipping_country" in result[i]["data"]){
						shipping_country_previous = result[i]["data"]["shipping_country"];
					}
					if("shipping_zip" in result[i]["data"]){
						shipping_zip_previous = result[i]["data"]["shipping_zip"];
					}
					// console.log(first_name_previous);
					// console.log(last_name_previous);
					// console.log(address_previous);
					notify_success("Update", result[i]["message"]);
				}else{
					notify_error("Error", result[i]["message"]);
				}
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

// //first_name check
// var previousValue = $("#fname").val();
// $("#fname").keyup(function(e) {
//     var currentValue = $(this).val();
//     if(currentValue != previousValue) {
// 			//updatetest(currentValue);
//     }
// });
