<?php 
	$name = htmlspecialchars($_POST['name']);
	$email = htmlspecialchars($_POST['email']);
	$phone = htmlspecialchars($_POST['phone']);
	$message = htmlspecialchars($_POST['message']);
	mail ("kryklyvenkovlad@gmail.com", $email, $name." ".$email." ".$phone."\r\n".$message);
	header('Location: index.html');
?>
