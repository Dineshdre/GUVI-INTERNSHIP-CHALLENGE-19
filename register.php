<?php

session_start();


$email = $_POST['email'];
$password = $_POST['password'];

$con = mysqli_connect('localhost','root','','register');
$sql = " SELECT * FROM login WHERE email ='$email' ";
$result = mysqli_query($con , $sql);
$num = mysqli_num_rows($result);
if ($num ==1) {
	echo('0');
}
else{
	$reg = "INSERT INTO login(email , password) VALUES('$email' , '$password')";
	mysqli_query($con , $reg);
	if($reg){
	echo('1');	
	}
	

}

?>