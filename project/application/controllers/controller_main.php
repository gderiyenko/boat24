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
		$to = EMAIL_ADDRESS;
		$subject = "New Subscription";

		$name = htmlspecialchars($emailInfo['name']);
		$email = htmlspecialchars($emailInfo['email']);
		$phone = htmlspecialchars($emailInfo['phone']);
		$msg = htmlspecialchars($emailInfo['message']);

		$message = "
		<html>
		<head>
			<title>$email</title>
		</head>
		<body>
			<table>
				<tr>
					<th>Name: $name</th>
				</tr>
				<tr>
					<th>Email: $email</th>
				</tr>
				<tr>
					<td>Phone: $phone</td>
				</tr>
				<tr>
					<td>$msg</td>
				</tr>
			</table>
		</body>
		</html>
		";

		// Always set content-type when sending HTML email
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

		// More headers
		//$headers .= 'From: <webmaster@example.com>' . "\r\n";
		//$headers .= 'Cc: myboss@example.com' . "\r\n";

		mail($to,$subject,$message,$headers);
		/*$name = htmlspecialchars($emailInfo['name']);
		$email = htmlspecialchars($emailInfo['email']);
		$phone = htmlspecialchars($emailInfo['phone']);
		$message = htmlspecialchars($emailInfo['message']);
		return mail (EMAIL_ADDRESS, $email, "Name: ".$name."\r\n"."Email: ".$email."\r\n"."Phone: ".$phone."\r\n".$message);
		*/
	}
}