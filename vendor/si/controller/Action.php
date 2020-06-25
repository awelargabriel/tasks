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
		$singleClassName = strtolower(str_replace("app\\controllers\\", "", $actual));
		include_once '../app/views/' . $singleClassName . '/' .$this->action/add/index;
	}
}