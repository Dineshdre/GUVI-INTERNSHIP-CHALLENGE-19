<?php

session_start();



require_once('config.php');

$email =$_POST['email'];
$password = $_POST['password'];


$sql = "SELECT * FROM login WHERE email = ? AND password = ? LIMIT 1";
$stmt =$db->prepare($sql);
$result = $stmt->execute([$email , $password]);

if($result){
	$user = $stmt->fetch(PDO::FETCH_ASSOC);
	if($stmt->rowCount() > 0){
		$_SESSION['userlogin'] = $email;	
		echo 'valid';
	}else {
		echo 'error';
			}
}