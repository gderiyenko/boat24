<?php

class Controller_Personal extends Controller
{
	
	function __construct()
	{
		$this->model = new Model_Personal(HOST, LOGIN, PASSWORD, DB);
		$this->view = new View();
	}
	
	function action_index()
	{
		if (!empty($_SESSION['user_id'])) 
		{
			$data = $this->model->get_user_data($_SESSION['user_id']);
			$this->view->generate('personal_view.php', 'template_view.php', $data);
			
		} else {
			header("Location: /lwg");
		}
	}
}
