<?php
namespace App\controller;

use Src\classes\ClassRender;
use Src\interfaces\InterfaceView;

class ControllerHome extends ClassRender implements InterfaceView
{

	public function __construct()
	{
		$this->setTitle("Página Inicial");
		$this->setDescription("Esse é o nosso site MVC");
		$this->setKeywords("mvc completo, curso de mvc, webdesign em foco");
		$this->setDir("home");
		$this->renderLayout();
	}

}
