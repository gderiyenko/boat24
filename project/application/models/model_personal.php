<?php
class Model_Personal extends Model
{
	public function get_user_data($id) {
		$this->set_charset("utf8");
		$res = $this->query("SELECT * FROM `users` WHERE  `user_id`='$id' ");
		$res = $res->fetch_assoc();
		return $res;
	}
	
	public function save_user_data($data) {
		$this->set_charset("utf8");
		$res = $this->query("UPDATE  `users` SET `fname`='".$data["fname"]."',`lname`='".$data["lname"]."', `email`='".$data["email"]."', `date`= now() WHERE `password`='".$data["password"]."' AND `user_id`=".$data["id"]);
	}
		
}