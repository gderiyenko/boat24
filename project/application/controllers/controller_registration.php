<?php

class Controller_Registration extends Controller
{
	
	function __construct()
	{
		//session_destroy();
		$this->model = new Model_Registration(HOST, LOGIN, PASSWORD, DB);
		$this->view = new View();
	}
	
	function action_index()
	{
		$this->view->generate('registration_view.php', 'template_view.php');
	}

	function generate_CV_name($fname, $lname, $ext) 
	{
		return "$fname"."_"."$lname"."_". md5( time( ) ) . ".$ext";
	}
	
	function action_check()
	{
		
		$filter = array("<", ">");
		foreach($_POST as $key=>&$value)	$value=str_replace ($filter, "|", $value);
		if(empty($_POST['fname'])||empty($_POST['lname'])||empty($_POST['password'])) {
			$_SESSION['data']='Fill in all the fields of the registration form';
			header("Location: /lwg/project/registration");

		} elseif($_POST['password']!=$_POST['password2']) {
			$_SESSION['data']='Passwords did not match';
			header("Location: /lwg/project/registration");

		} elseif($this->model->checklogin($_POST['email'],$_POST['password'])) {
			$_SESSION['data']="A user with ".$_POST['email']." email is already registered";
			header("Location: /lwg/project/registration");

		} else {
			//check extension
			$allowed =  array('pdf', 'docx', 'docm', 'docb');
			$filename = $_FILES['file']['name'];
			$ext = pathinfo($filename, PATHINFO_EXTENSION);
			if(!in_array($ext,$allowed) ) {
			    $_SESSION['data']='CV file extension have an invalid format';
				header("Location: /lwg/project/registration");
			}
			//upload file 
			$t = "/www/apache/domains/www.boat24.ee/uploads/";
			clearstatcache();
			$filenameCV = $this->generate_CV_name($_POST['fname'], $_POST['lname'], $ext);
			$targetfolder = $t . $filenameCV;
			if(move_uploaded_file($_FILES['file']['tmp_name'], $targetfolder)) {
				echo "The file ". basename( $_FILES['file']['name']). " is uploaded";
			} else {
				echo "Problem uploading file";
			}
			// add to database
			$this->model->registration_user($_POST['fname'],$_POST['lname'],$_POST['lang'],$_POST['email'],$_POST['password'], $filenameCV);
			$_SESSION['check']=true;
			$_SESSION['fname']=$data['fname'];
			$_SESSION['lname']=$data['lname'];
			$_SESSION['user_id']=$data['user_id'];
			$_SESSION['lang']=$data['lang'];
			header ("Location: /lwg");
		}
	}
	
	function send_admin_mail($fname,$lname,$school,$city,$klass)
	{
		/*
		$headers = "From: admin@matholymponline.com";
		$headers .= "\r\nReply-To: admin@matholymponline.com";
		$headers .= "\r\nX-Mailer: PHP/".phpversion();
		$to = 'matholymponline@gmail.com';
		$subject = "New registration on matholymponline.com";
		$message = "Now registred new user $fname $lname from $klass $school $city.";
		mail($to,$subject,$message,$headers,"-f admin@matholymponline.com");
		*/
		
	}
	
	function send_mail($fname,$lname,$email)
	{
		/*require_once(dirname(dirname(dirname(__FILE__))).'/PHPMailer/PHPMailerAutoload.php');
		$mail = new PHPMailer();

		$mail->CharSet = "koi8-u";
		$mail->isSMTP();
		$mail->SMTPDebug = 0;
		$mail->Host = 'smtp.gmail.com';
		$mail->Port = 587;
		$mail->SMTPSecure = 'tls';
		$mail->SMTPAuth = true;


//$mail->SMTPAuth   = true;                   // enable SMTP authentication
//			$mail->SMTPSecure = "ssl";                  // sets the prefix to the servier
//			$mail->Host       = "smtp.gmail.com";       // sets GMAIL as the SMTP server
//			$mail->Port       = 465;                    // set the SMTP port
			$mail->Username   = 'matholymponline@gmail.com';        // GMAIL username
			$mail->Password   = 'tel80967632293';        // GMAIL password



			$mail->CharSet = 'UTF-8';//по умолчанию iso-8859-1
			$mail->setFrom('matholymponline@gmail.com', 'Admin');
			$mail->addAddress($email, $fname);
			$mail->Subject = 'Реєстрація на сайті математичного турніру matholymponline.com';
			$mail->msgHTML(file_get_contents(dirname(dirname(__FILE__)).'/views/content.html'));
			$mail->send();	
			*/
		}



	}
