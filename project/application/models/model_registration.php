<?php
class Model_Registration extends Model
{
	public function registration_user($fname,$lname,$lang,$email,$password,$nameCV)
	{
		// INSERT
		$this->set_charset("utf8");
		$fname = $this->real_escape_string($fname);
		$lname = $this->real_escape_string($lname);
		$lang = $this->real_escape_string($lang);
		$password = $this->real_escape_string($password);

		$this->query("INSERT INTO `users` (`fname`,`lname`,`lang`,`email`,`password`,`date`, `filename_CV`) 
			VALUES ('$fname','$lname','$lang','$email','$password',now(),'$nameCV')");

		// GET
		$this->set_charset("utf8");
		$email = $this->real_escape_string($email);
		$pass = $this->real_escape_string($password);
		$sql = "SELECT * FROM users WHERE email = '".$email."' AND password = '".$pass."'";
		$stmt = $this->query($sql);
		$res = $stmt->fetch_assoc();
		return $res;

	}
	

	public function checklogin($email,$password)
	{
		$this->set_charset("utf8");
		$result = $this->query("SELECT `user_id` FROM `users` WHERE  `email`='$email'");
		$res = $result->fetch_assoc();
		if (!empty($res)) return true; else return false; 	
	}	
}