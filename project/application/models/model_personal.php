<?php
class Model_Personal extends Model
{
	public function get_user_data($id) {
		$this->set_charset("utf8");
		$res = $this->query("SELECT * FROM `users` WHERE  `user_id`='$id' ");
		$res = $res->fetch_assoc();
		return $res;
	}

	public function checkEmail($userId, $email) {	
		$this->set_charset("utf8");
		$email = $this->real_escape_string($email);
		$sql = "SELECT * FROM users WHERE email = '".$email."' AND user_id != '". $userId ."';";
		$stmt = $this->query($sql);
		$res = $stmt->fetch_assoc();
		return $res;
	}
	
	public function save_user_data($data) {
		/*
		$this->set_charset("utf8");
		$res = $this->query("UPDATE  `users` SET `fname`='".$data["fname"]."',`lname`='".$data["lname"]."', `email`='".$data["email"]."', `date`= now() WHERE `password`='".$data["password"]."' AND `user_id`=".$data["id"]);
		*/
	}
	public function edit_user_data($userId, $fname, $lname, $lang, $email, $password)
	{
		// INSERT
		$this->set_charset("utf8");
		$fname = $this->real_escape_string($fname);
		$lname = $this->real_escape_string($lname);
		$lang = $this->real_escape_string($lang);
		$password = $this->real_escape_string($password);

		$this->query("UPDATE `users`
			SET 
				`fname`= '". $fname ."',
				`lname`= '". $lname ."',
				`lang`= '". $lang ."',
				`email`= '". $email ."'  
			WHERE
				`password`='".$password."'
			AND `user_id`=". $userId . " ;"
		);

		// GET
		$this->set_charset("utf8");
		$email = $this->real_escape_string($email);
		$pass = $this->real_escape_string($password);
		$sql = "SELECT * FROM users WHERE email = '".$email."' AND password = '".$pass."'";
		$stmt = $this->query($sql);
		$res = $stmt->fetch_assoc();
		return $res;

	}

	public function edit_user_data_with_new_CV($userId, $fname, $lname, $lang, $email, $password, $nameCV, $filename)
	{
		// INSERT
		$this->set_charset("utf8");
		$fname = $this->real_escape_string($fname);
		$lname = $this->real_escape_string($lname);
		$lang = $this->real_escape_string($lang);
		$password = $this->real_escape_string($password);
		$filename_CV = $this->real_escape_string($nameCV);

		$this->query("UPDATE `users`
			SET 
				`fname`= '". $fname ."',
				`lname`= '". $lname ."',
				`lang`= '". $lang ."',
				`email`= '". $email ."',
				`filename_CV` = '". $filename_CV ."',
				`uploaded_filename_CV` = '". $filename ."' 
			WHERE 
				`password`='".$password."'
			AND `user_id`=". $userId . " ;"
		);

		// GET
		$this->set_charset("utf8");
		$email = $this->real_escape_string($email);
		$pass = $this->real_escape_string($password);
		$sql = "SELECT * FROM users WHERE email = '".$email."' AND password = '".$pass."'";
		$stmt = $this->query($sql);
		$res = $stmt->fetch_assoc();
		return $res;

	}
	
		
}