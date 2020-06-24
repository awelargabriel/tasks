<?php

namespace app;

use si\init\Bootstrap;

class Init extends Bootstrap 
{
	
	//listar/definir  as rotas possíveis do projeto
	protected function initRoutes()
	{
		$taskRoutes['home'] = array(
			'route' => '/', 
			'controller' => 'index', 
			'action' => 'index',
		);

		$taskRoutes['add'] = array(
			'route' => '/add',
			'controller' => 'index',
			'action'	=> 'add'
			 );

		$taskRoutes['edit'] = array(
			'route' => '/edit',
			'controller' => 'index',
			'action'	=> 'add'
			 );
		  
		
		$this->setRoutes($taskRoutes);

		//echo "Classe Init/ método initRoutes";
	}
	//conexão com o banco de dados
	public static function getDb()
	{
		$db = new \PDO
		(
			"mysql:host=localhost;dbname=tasks",
			"homestead",
			"secret",	
		);
		return $db;
	}


}