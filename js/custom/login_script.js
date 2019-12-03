function login(email, password){
  $.ajax({
    type: 'POST',
    url: url_login,
    contentType: "application/x-www-form-urlencoded; charset=UTF-8",
    dataType: "json",
    beforeSend: function(req) {
      req.setRequestHeader("Accept", "application/json");
    },
    data: {
      email:email,
      password:password
    },
    success: function(result) {
      //alert(result);
      $('#circle').css('display', 'none');
      if(result['success']){
        window.location.href = "home";
      } else {
        notify_error("Error!!", result["message"]);
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
