<?php 

namespace si\controller;

/**
 * 
 */
class Action
{	
	protected $view;
	protected $action;

	function __construct()
	{
		//carregar uma view dinamica
		$this->view = new \stdClass();	
	}
	
	public function render($action, $layout=true)
	{
		$this->action = $action;
		if($layout == true && file_exists("../App/views/layout.phtml"))
		{
			include_once "../App/views/layout.phtml";
		}
		else
		{
		$this->content();
		}

	}

	public function content()
	{
		$actual = get_class($this);
		var_dump($actual);
		$singleClassName = strtolower(str_replace("app\\controllers\\", "", $actual));
		var_dump($singleClassName);
		var_dump($this->action); exit;
		include_once '../app/views/' . $singleClassName . '/' .$this->action/add/index;
	}
}