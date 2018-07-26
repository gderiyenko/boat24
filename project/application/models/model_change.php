<?php
class Model_Change extends Model
{	

	public function save_user_data($oldPassword, $newPassword, $userId) {
		$this->set_charset("utf8");

		$res = $this->query("SELECT count(user_id) as resultsCount FROM `users` WHERE  `user_id`='". $userId ."' AND password='". $oldPassword ."';");
		$res = $res->fetch_assoc();
		if ($res["resultsCount"] != 1)
			return false;

		$res = $this->query("UPDATE  `users` SET `password`='".$newPassword."' WHERE `password`='".$oldPassword."' AND `user_id`=".$userId);
		return $res;
	}
		
}