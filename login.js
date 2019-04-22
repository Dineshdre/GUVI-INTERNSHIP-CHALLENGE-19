
$('#submit').click(function(e){

	var email = $("#semail").val();
	var password = $("#spassword").val();
	var cpassword = $("#cpassword").val();
	if(email==''|| password==''|| cpassword==''){
		alert("Please fill all the fields");
	}else if(password != cpassword){
		alert("Please enter the correct password");
	}else{
		e.preventDefault();
	$.ajax({
		type: "POST",
		url: "register.php",
		modal: false,
		data: {email : email, password : password},
		cache: false,
		success: function(data){
			if($.trim(data) == '1'){
				setTimeout('window.location.href= "index.php"',200);
				alert("Registration Success");
				alert("Please login now!");

		}else if($.trim(data) == '0'){
			alert("user already exists");
		}
		}
	});
	}
	return false;
});





$("#login").click(function(e){

var email = $("#email").val();
var password = $("#password").val();
if(email==''||password=='')
{
alert("Please Fill All Fields");
}

else{
	e.preventDefault();
$.ajax({
type: "POST",
url: "jslogin.php",
modal:false,
data: {password : password , email : email},
cache: false,
success: function(data){	
	if($.trim(data) == 'valid'){
	  window.location.href= "user.php";
	}else{
		alert('INVALID USERNAME OR PASSWORD');
	}
}
});
}
return false;
});



