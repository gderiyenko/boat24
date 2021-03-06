<?php

class Controller_Change extends Controller
{
	
	function __construct() {
		$this->model = new Model_Change(HOST, LOGIN, PASSWORD, DB);
		$this->view = new View();
	}
	
	function action_index() {
		if (!empty($_SESSION['user_id'])) 
		{
			$this->view->generate('change_view.php', 'template_view.php', $data);
		} else { 
			header("Location: /lwg");
		}
	}
	
	function action_save() {
		if ($_POST['newPassword'] == $_POST['newPasswordRepeat']) {
			$success = $this->model->save_user_data(sha1($_POST['oldPassword']), sha1($_POST['newPassword']), $_SESSION['user_id']);
			if ($success) {
				$_SESSION['msg'] = "OK";
				header ("Location: /lwg/project/change");
				die();
			}
		}
		$_SESSION['msg'] = "ERROR";
		$this->view->generate('change_view.php', 'template_view.php', $data);
	}
}
