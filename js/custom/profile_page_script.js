function first_name_reset(){
	document.getElementById('fname').value = first_name_previous;
}
function last_name_reset(){
	document.getElementById('lname').value = last_name_previous;
}
function address_reset(){
	document.getElementById('address').value = address_previous;
}

$(document).on('click', '#profileUpdateAll', function(){
	var first_name_current = document.getElementById('fname').value;
	var last_name_current = document.getElementById('lname').value;
	var address_current = document.getElementById('address').value;

	//first_name
	if(first_name_current != first_name_previous){
		var first_name = first_name_current;
	}else{
		var first_name = null;
	}

	//last_name
	if(last_name_current != last_name_previous){
		var last_name = last_name_current;
	}else{
		var last_name = null;
	}

	//address
	if(address_current != address_previous){
		var address = address_current;
	}else{
		var address = null;
	}

	$.ajax({
	  type: 'POST',
	  url: url,
		contentType: "application/x-www-form-urlencoded; charset=UTF-8",
    dataType: "json",
    beforeSend: function(req) {
        req.setRequestHeader("Accept", "application/json");
    },
		data: {
			first_name:first_name,
			last_name:last_name,
			address:address
    },
	  success: function(result) {
			for (var i = 0; i < result.length; i++) {
				if(result[i]["success"]){
					if("first_name" in result[i]["data"]){
						first_name_previous = result[i]["data"]["first_name"];
					}
					if("last_name" in result[i]["data"]){
						last_name_previous = result[i]["data"]["last_name"];
					}
					if("address" in result[i]["data"]){
						address_previous = result[i]["data"]["address"];
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
