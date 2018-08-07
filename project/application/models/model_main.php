<?php

class Model_Main extends Model
{
	public function start_new_subscription($emailInfo)
	{	
		// INSERT
		$this->set_charset("utf8");
		$name = $this->real_escape_string($emailInfo['name']);
		$email = $this->real_escape_string($emailInfo['email']);
		$phoneNumber = $this->real_escape_string($emailInfo['phone']);
		$active = '1';

		$res = $this->query("INSERT INTO `subscriptions` (`name`,`email`,`phone_number`,`active`,`created_at`,`updated_at`) 
			VALUES ('$name','$email','$phoneNumber','$active',now(), null)");

		return $res;
	}
}
