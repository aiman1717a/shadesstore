function register(user_name, user_email, user_password){
  $.ajax({
    type: 'POST',
    url: url_register,
    contentType: "application/x-www-form-urlencoded; charset=UTF-8",
    dataType: "json",
    beforeSend: function(req) {
        req.setRequestHeader("Accept", "application/json");
    },
    data: {
      user_name:user_name,
      user_email:user_email,
      user_password:user_password
    },
    success: function(result) {
       // alert(result);
       $('#circle').css('display', 'none');
      if(result["success"] === true){
        window.location.href = "login";
        notify_success("Registered", result["message"]);
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
