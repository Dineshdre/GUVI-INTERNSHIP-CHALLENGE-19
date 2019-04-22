<?php


$con = mysqli_connect('localhost','root','','register');


	$name=$_POST['name'];
	$dob=$_POST['dob'];
	$age=$_POST['age'];
	$contact=$_POST['contact'];

	$sql = "INSERT INTO login(uname ,age , contact) VALUES ('$name',$age','$contact')";

		if(mysql_query($con,$sql)){
			echo("1");
		}
		else{
			echo("0");
		}
		mysql_close($con);
	
?>



