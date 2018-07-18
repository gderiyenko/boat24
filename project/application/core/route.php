<?php

/*
Класс-маршрутизатор для определения запрашиваемой страницы.
> цепляет классы контроллеров и моделей;
> создает экземпляры контролеров страниц и вызывает действия этих контроллеров.
*/
class Route
{

	static function start()
	{
		// контроллер и действие по умолчанию
		$controller_name = 'Main';
		$action_name = 'index';
		
		$routes = explode('/', $_SERVER['REQUEST_URI']);

		// получаем имя контроллера
		if ( !empty($routes[3]) )
		{	
			$controller_name = $routes[3];
		}
		
		// получаем имя экшена
		if ( !empty($routes[4]) )
		{
			$action_name = $routes[4];
		}

		// добавляем префиксы
		$model_name = 'Model_'.$controller_name;
		$controller_name = 'Controller_'.$controller_name;
		$action_name = 'action_'.$action_name;

/*		
		echo "Model: $model_name <br>";
		echo "Controller: $controller_name <br>";
		echo "Action: $action_name <br>";
*/		

		// подцепляем файл с классом модели (файла модели может и не быть)

		$model_file = strtolower($model_name).'.php';
		$model_path = ROOT_DIR."/application/models/".$model_file;
		
		if(file_exists($model_path))
		{
			include $model_path;
		}

		// подцепляем файл с классом контроллера
		$controller_file = strtolower($controller_name).'.php';
		$controller_path = ROOT_DIR."/application/controllers/".$controller_file;
		if(file_exists($controller_path))
		{
			include $controller_path;
		}
		else
		{
			Route::ErrorPage404($controller_path, $controller_file);
		}
		
		// создаем контроллер
		$controller = new $controller_name;
		$action = $action_name;
		
		if(method_exists($controller, $action))
		{
			// вызываем действие контроллера
			$controller->$action();
		}
		else
		{
			// здесь также разумнее было бы кинуть исключение
			Route::ErrorPage404(2);
		}
	
	}

	static function ErrorPage404($x, $y)
	{
       // $host = ROOT_DIR;
		//$host ='http://matholymponline.com/';
        header('HTTP/1.1 404 Not Found');
		header("Status: 404 Not Found");
		header('Location:/404');
    }
    
}
