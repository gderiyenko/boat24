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

	function action_downloadCV()
	{
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
}
