<?php 
	$name = htmlspecialchars($_POST['name']);
	$email = htmlspecialchars($_POST['email']);
	$phone = htmlspecialchars($_POST['phone']);
	$message = htmlspecialchars($_POST['message']);
	mail ("test@lwg.ee", $email, "Name: ".$name."\r\n"."Email: ".$email."\r\n"."Phone: ".$phone."\r\n".$message);
	header('Location: index.php');
?>
