<?php

namespace si\init;



abstract class Bootstrap
{
	private $routes;
	
	public function __construct()
	{	
		$this->initRoutes();
		$this->run($this->getUrl());  
	}

	abstract protected function initRoutes();
	
	protected function setRoutes(array $routes)
	{
		$this->routes = $routes;	
	}

	protected function run($url)
	{
 		/*comparar a url que usuário digitou com as rotas disponível e descubro qual controller e action resolvem esse request */
 		array_walk($this->routes, function($route) use($url) {
	 			if($url == $route['route'])
	 			{
	 				//app\\controllers\\Index
	 				//onde estão os controllers para o autoload carregar
	 				$class = "app\\controllers\\". ucfirst($route['controller']);
	
	 				//instanciar o objeto do controller
	 				$controller = new $class;
	 				
	 				$action = $route['action'];
	 				
	 				//executar o método da action requerida
	 				$controller->$action();	 				
	 			}
 				
	 			
	 		}
	 	);
	}

	protected function getUrl()
	{
		//var_dump($_SERVER['REQUEST_URI'], component);exit;
		//descobrir qual url o usuário digitou
		return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
	}
}