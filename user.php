<?php 
	session_start();
		require_once('config.php');
	
		if(!isset($_SESSION['userlogin']))
		{
			header("location : index.php");
		}
		if(isset($_GET['logout'])){

			session_destroy();
			unset($_SESSION);
			header("location: index.php");
		}	
 	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
 <body class="bg">


 		<h1 align="center">UPDATE YOUR PROFILE HERE <?php echo $_SESSION['userlogin'];?></h1>
 		<div class="form_container d-flex justify-content-center">
 		<form align="center" id="frmbox" >
 			
 				<div class="form-body">
							    <div class="form-group is-hidden email">
					              <label>Name</label>
					        	  <input type="textbox" class="form-control form-element"  id="name" placeholder="Enter your name" required>
					            </div>

					            <div class="form-group">
					              <label>Date of Birth</label>
								  <input type="date" class="form-control form-element"  id="dob" placeholder="DOB" required>
					            </div>

					            <div class="form-group">
					              <label>Age</label>
								  <input type="number" class="form-control form-element"  id="age" placeholder="Age" required>
					            </div>

					            <div class="form-group">
					              <label>Contact Number</label>
								  <input type="number" class="form-control form-element"  id="contact" placeholder="Enter contact number" required>
					            </div>
			  
								  <div class="form-group">
								    <div class="form-check">
								      <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" required>
								      <label class="form-check-label" for="invalidCheck">
								        Check all the details before submitting
								      </label>
								      
								    </div>
								  </div>
			    </div>
			            <button class="btn btn-primary" id="update" type="submit">Update Details</button>
			            <a class="btn btn-primary" href="user.php?logout=true" role="button">LOGOUT</a>
			            
		</form>
			</div>		
			<script  src="https://code.jquery.com/jquery-3.4.0.min.js"
  integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg="
  crossorigin="anonymous"></script>

<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script>
	$("#frmbox").submit(function(e) 
	{
		
		e.preventDefault();
		$.ajax({
			type: 'POST',
			url: 'updateprofile.php',
			data : $('#frmbox').serialize(),
			success:function(data){
				if($.trim(data)== '1'){
					alert("Profile Updated");
				}
				else if($.trim(data)=='0'){
					alert("Error in updation");
				}
			}
		});
		return false;
	});
</script>
</body>
</html>



