<?php

class Controller_Personal extends Controller
{
	
	function __construct() {
		$this->model = new Model_Personal(HOST, LOGIN, PASSWORD, DB);
		$this->view = new View();
	}
	
	function action_index() {
		if (!empty($_SESSION['user_id'])) 
		{
			$data = $this->model->get_user_data($_SESSION['user_id']);
			$this->view->generate('personal_view.php', 'template_view.php', $data);
			
		} else {
			header("Location: /lwg");
		}
	}

	function action_downloadCV() {
		$data = $this->model->get_user_data($_SESSION['user_id']);
		$my_file = "/uploads/". $data['filename_CV'];
		$fullPath = dirname(__FILE__) . '/../../../../..' . $my_file;
		if ($fd = fopen ($fullPath, "r")) {
		    $fsize = filesize($fullPath);
		    $path_parts = pathinfo($fullPath);
		    $ext = strtolower($path_parts["extension"]);
		    switch ($ext) {
		        case "pdf":
		        header("Content-type: application/pdf"); 
		        header("Content-Disposition: attachment; filename=\"".$path_parts["basename"]."\""); // use 'attachment' to force a download
		        break;
		        default; // Other document formats (doc, docx, odt, ods etc)
		        header('Content-type: application/vnd.openxmlformats-officedocument.wordprocessingml.document');
		        header("Content-Disposition: filename=\"".$path_parts["basename"]."\"");
		    }
		    header("Content-length: $fsize");
		    header("Cache-control: private"); //use this to open files directly
		    while(!feof($fd)) {
		        $buffer = fread($fd, 2048);
		        echo $buffer;
		    }
		}
		fclose ($fd);
		header("Location: /lwg");
		exit;
	}

	function action_edit() {
		$data = $this->model->get_user_data($_SESSION['user_id']);
		return $this->view->generate('personal_edit_view.php', 'template_view.php', $data);
	}

	function generate_CV_name($fname, $lname, $ext) {
		return "$fname"."_"."$lname"."_". md5( time( ) ) . ".$ext";
	}

	function action_save() {
		$data = $this->model->get_user_data($_SESSION['user_id']); // get old data 

		$filter = array("<", ">");
		foreach($_POST as $key=>&$value)	$value=str_replace ($filter, "|", $value);

		// errors check
		if(empty($_POST['fname'])||empty($_POST['lname'])||empty($_POST['password'])||empty($_POST['email'])) { // empty value
			$_SESSION['data']='Fill in all the fields of the registration form';
			header("Location: /lwg/project/personal/edit");

		} elseif($_POST['password']!=$data['password']) { // wrong password
			$_SESSION['data']='Password did not match';
			header("Location: /lwg/project/personal/edit");

		} elseif($this->model->checkEmail($data['user_id'], $_POST['email'])) { // email exist
			$_SESSION['data']="A user with ".$_POST['email']." email is already registered";
			header("Location: /lwg/project/personal/edit");

		} else { // success

			if ($_FILES['file']['size'] > 0) { // if file was uploaded
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
			} else { // if was not upload
				$filenameCV = null;
			}

			// edit raw in database
			if ($filenameCV == null){
				$data = $this->model->edit_user_data( // without CV
					$data['user_id'],
					$_POST['fname'],
					$_POST['lname'],
					$_POST['lang'],
					$_POST['email'],
					$_POST['password']);
			} else {
				$data = $this->model->edit_user_data_with_new_CV(
					$data['user_id'],
					$_POST['fname'],
					$_POST['lname'],
					$_POST['lang'],
					$_POST['email'],
					$_POST['password'],
					$filenameCV);
			}
			session_start(); // new session
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
