<?php 

			session_start();
			if(isset($_SESSION['userlogin'])){
				header("location : user.php");
			}
			


?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	
	
</head>
<body class="bg">
	<p><h1 align="center">GUVI WEBDESIGN TASK</h1></p>
	<div class="container multi-form-wrapper">
		 <div class="form-container row">
			<div id="main-login" class="module-form  col-xs-12 col-sm-5 col-md-5 col-lg-5">
			     <div class="form-content">
            		<h2 align="center">Login</h2>       
        				<div class="form-body">
							<form role="form">
					            

					            <div class="form-group is-hidden email">
					              <label for="Email"> <span class="glyphicon glyphicon-user"> </span> Email</label>
					        	  <input type="email" class="form-control form-element" name="email" id="email" placeholder="Email" required>
					            </div>

					            <div class="form-group password">
					              <label for="password"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
								  <input type="password" class="form-control form-element" name="password" id="password" placeholder="Password" required>
					            </div>
					            <br>
					            
								<button type="button" class="btn btn-default btn-success btn-block submit-btn login-btn" id="login">
									<span class="glyphicon glyphicon-lock"></span>&nbsp; Login</button>
					          
					          </form>
					        </div>
					        
					      </div>

			</div>

	 	<div class="col-sm-1"></div>
	 	<div class="col-sm-1 "></div>
		<div id="main-signup" class="module-form col-xs-12 col-sm-5 col-md-5 col-lg-5">
		

		 	<div class="form-content">
				<h2 align="center">Signup</h2>     

		        <div class="form-body">
					<form role="form">
		            
	            <div class="form-group is-hidden email">
		              <label for="Email"> <span class="glyphicon glyphicon-user"> </span> Email</label>
		        	  <input type="email" class="form-control form-element" name="email" id="semail" placeholder="Email">
		            </div>

		            <div class="form-group password">
		              <label for="password"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
					  <input  type="password" class="form-control password-validation form-element" name="password" placeholder="Password" id="spassword" data-validation="false">
		            </div>
		            <div class="form-group confirm-password">
		              <label for="confirm-password"><span class="glyphicon glyphicon-eye-open"></span> Confirm Password</label>
					  <input  type="password" class="form-control password-confirmation form-element" name="password1" placeholder="Confirm Password" id="cpassword" data-validation="false">
		            </div>
		            <br>
		            <button type="button" class="btn btn-default btn-danger btn-block submit-btn signup-btn" id="submit"><span class="glyphicon glyphicon-pencil" ></span>&nbsp; Signup </button> 
		          </form>
		        </div>
        

		</div>
	</div> 



	</div>
</div>
<script  src="https://code.jquery.com/jquery-3.4.0.min.js"
  integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg="
  crossorigin="anonymous"></script>

<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="login.js"></script>

</body>
</html>