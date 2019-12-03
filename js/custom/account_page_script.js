function user_name_reset(){
	document.getElementById('user_name').value = first_name_previous;
}
function email_reset(){
	document.getElementById('email').value = last_name_previous;
}

$(document).on('click', '#accountUpdateAll', function(){
	var user_name_current = document.getElementById('user_name').value;
	var email_current = document.getElementById('email').value;
	// var password_current = document.getElementById('password').value;

	console.log(user_name_current);
	console.log(email_current);

	//user_name
	if(user_name_current != user_name_previous){
		var user_name = user_name_current;
	}else{
		var user_name = null;
	}

	//email
	if(email_current != email_previous){
		var email = email_current;
	}else{
		var email = null;
	}

	//address
	// if(address_current != address_previous){
	// 		var address = address_current;
	// }else{
	// 	var address = null;
	// }

	$.ajax({
	  type: 'POST',
	  url: url,
		contentType: "application/x-www-form-urlencoded; charset=UTF-8",
    dataType: "json",
    beforeSend: function(req) {
            req.setRequestHeader("Accept", "application/json");
    },
		data: {
			user_name:user_name,
			email:email
    },
	  success: function(result) {
			for (var i = 0; i < result.length; i++) {
				notify_success("Update", result[i]["message"]);
				if(result[i]["success"]){
					if("user_name" in result[i]["data"]){
						user_name_previous = result[i]["data"]["user_name"];
					}
					if("email" in result[i]["data"]){
						email_previous = result[i]["data"]["email"];
						notify_success("Status", "Logging Out");
						setTimeout(function(){
							window.location.href = "logout";
						},2000);
					}
					// console.log(first_name_previous);
					// console.log(last_name_previous);
					// console.log(address_previous);
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

//first_name check
// var previousValue = $("#fname").val();
// $("#fname").keyup(function(e) {
//     var currentValue = $(this).val();
//     if(currentValue != previousValue) {
// 			//updatetest(currentValue);
//     }
// });
