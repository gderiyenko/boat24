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

	function check_file_extension($filename) { // extension validation
		$extensions = array( // available extensions
			".docx",
			".doc",
			".pdf"
		);

		$availableExtension = false;
		foreach ($extensions as $key => $extension) {
			$extensionCheck = true;
			for($i=1; $i<=strlen($extension); ++$i) {
				if ($extension[strlen($extension) - $i] != $filename[strlen($filename )- $i]) {
					$extensionCheck = false;
					break;
				}
			}
			if ($extensionCheck) {
				$availableExtension = true;
				break;
			}
		}

		if (!$availableExtension) {
			$data ="You tried to upload unavailable format of file.";
			$this->view->generate('registration_view.php', 'template_view.php', $data);
			die();
		} else {
			return true;
		}
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

		} elseif($this->model->checklogin($_POST['email'])) {
			$_SESSION['data']="A user with ".$_POST['email']." email is already registered";
			header("Location: /lwg/project/registration");

		} else {
			if ( $_FILES['file']['size'] > 0 && ($_FILES["file"]["size"] < 200000) ) { // if file was uploaded
				
				$filename = $_FILES['file']['name'];
				$this->check_file_extension($filename);

				//upload file 
				$t = UPLOADS;
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
				$filename = null;
			}
			// add to database
			$data = $this->model->registration_user($_POST['fname'],$_POST['lname'],$_POST['lang'],$_POST['email'],sha1($_POST['password']), $filenameCV, $filename);
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
