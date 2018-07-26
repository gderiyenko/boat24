<?php
class Controller_Login extends Controller
{
	
	function __construct()
	{
		session_unset ();
		$this->model = new Model_Login(HOST, LOGIN, PASSWORD, DB);
		$this->view = new View();
	}
	
	function action_index()
	{
		if((!empty($_POST['email']))&&(!empty($_POST['password'])))
		{
			$data = $this->model->login_user($_POST['email'],$_POST['password']);
			
			if(!empty($data)) 
				{
				$_SESSION['check']=true;
			//	$_SESSION['check']=$data['payment'];
				$_SESSION['fname']=$data['fname'];
				$_SESSION['lname']=$data['lname'];
				$_SESSION['user_id']=$data['user_id'];
				$_SESSION['lang']=$data['lang'];
				
				//$this->model->save_logs($_SESSION['user_id'],$_COOKIE["PHPSESSID"],$_SESSION['klass']);
			}
		
		}
		
		if((!empty($_SESSION['user_id'])))  header ("Location: /lwg");
			else	$this->view->generate('login_view.php', 'template_view.php');
		
	}

	public function action_close(){
		session_unset ();
		header ("Location: ../login");
	}
	
	
}
