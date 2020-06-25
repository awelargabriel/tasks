<?php

namespace app\controllers;

use si\controller\Action;

class Index extends Action
{	
	//Action index
	public function index()
	{
		$this->render('index');
		//renderizar uma view
	}

	//Action add
	public function add()
	{	
		var_dump($Post)
		$this->render('add');
	}


}

//MVC View - Controller -> model ->Controller ->View 