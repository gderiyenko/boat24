<?php

class Controller_Main extends Controller
{

	function __construct() {
		$this->model = new Model_Main(HOST, LOGIN, PASSWORD, DB);
	}

	function action_index() {	
		$data = mktime(0, 0, 0, date("m")  , date("d")+1, date("Y"));
		$this->view->generate('main_view.php', 'template_view.php',$data);
	}

	function action_subscription() {
		
		if (empty($_POST)) { // if the request was wrong
			header('Location: /lwg'); // exit from script
			exit();
		}
		// send email to admin
		$this->send_email($_POST);
		// add info about subscription to database
		$this->model->start_new_subscription($_POST);
		// redirect to contact + popup
		$_SESSION['msg'] = "OK";
		header('Location: /lwg/test.php');
	}

	function send_email($emailInfo) { // send email function
		$name = htmlspecialchars($emailInfo['name']);
		$email = htmlspecialchars($emailInfo['email']);
		$phone = htmlspecialchars($emailInfo['phone']);
		$message = htmlspecialchars($emailInfo['message']);
		return mail (EMAIL_ADDRESS, $email, "Name: ".$name."\r\n"."Email: ".$email."\r\n"."Phone: ".$phone."\r\n".$message);
	}
}