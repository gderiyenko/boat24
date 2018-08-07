<?php

class Controller_Registration extends Controller
{
	
	function __construct() {	
		session_unset ();
		//session_destroy();
		$this->model = new Model_Registration(HOST, LOGIN, PASSWORD, DB);
		$this->view = new View();
	}
	
	function action_index() {
		$this->view->generate('registration_view.php', 'template_view.php');
	}

	function generate_CV_name($fname, $lname, $ext) {
		return "$fname"."_"."$lname"."_". md5( time( ) ) . ".$ext";
	}
	
	function action_check() {
		
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
			if ($_FILES['file']['size'] > 0) {
				$filename = $_FILES['file']['name'];
				//upload file 
				$t = "/www/apache/domains/www.boat24.ee/uploads/";
				clearstatcache();
				$filenameCV = $this->generate_CV_name($_POST['fname'], $_POST['lname'], $ext);
				$targetfolder = $t . $filenameCV;
				if(move_uploaded_file($_FILES['file']['tmp_name'], $targetfolder)) {
					$fullPath = dirname(__FILE__) . '/../../../../../uploads/' . $filenameCV;
					chmod($fullPath, 0777);
				} else {
					echo "Problem uploading file";
				}
			} else {
				$filenameCV = null;
			}
			// add to database
			$data = $this->model->registration_user($_POST['fname'],$_POST['lname'],$_POST['lang'],$_POST['email'],$_POST['password'], $filenameCV);
			session_start();
			if (!empty($data)) {
				$_SESSION['check']=true;
				$_SESSION['fname']=$data['fname'];
				$_SESSION['lname']=$data['lname'];
				$_SESSION['email']=$data['email'];
				$_SESSION['user_id']=$data['user_id'];
				$_SESSION['lang']=$data['lang'];
			}
			header ("Location: /lwg");
		}
	}
}
