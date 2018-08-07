<?php

class Model_Login extends Model
{
	public function login_user($email,$pass) {	
		$this->set_charset("utf8");
		$email = $this->real_escape_string($email);
		$pass = $this->real_escape_string($pass);
		$sql = "SELECT * FROM users WHERE email = '".$email."' AND password = '".$pass."'";
		$stmt = $this->query($sql);
		$res = $stmt->fetch_assoc();
		return $res;
	}
	
	public function save_logs($user_id,$session_id,$klass) {	
		$h = 0;
		$this->query("INSERT INTO `logs` (`user_id`, `session_id`, `klass`, `time`) 
			VALUES ('$user_id', '$session_id', $klass, ADDTIME( NOW( ) , '$h' ))");
	}
}