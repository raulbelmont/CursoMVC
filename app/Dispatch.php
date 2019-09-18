<?php
namespace App;

use Src\classes\ClassRoutes;

class Dispatch extends ClassRoutes
{
	#Atributos
	private $Method;
	private $Param=[];
	private $Obj;

	#Método COonstrutor
	public function __construct()
	{
		self::addController();
	}

	#Método de adição de controller
	private function addController()
	{
		$RotaController = $this->getRota();
		$NameS="App\\controller\\{$RotaController}";
		$this->Obj = new $NameS;

		if (isset($this->parseUrl()[1])) {
			self::addMethod();
		}
	}

	#Método de adição de método do controller
	private function addMethod()
	{
		if (method_exists($this->Obj, $this->parseUrl()[1])) {
			$this->setMethod("{$this->parseUrl()[1]}");
			self::addParam();
			call_user_func_array([$this->Obj, $this->getMethod()], $this->getParam());
		}
	}

	#Método de adição de parâmetros do controller
	private function addParam()
	{
        $ContArray = count($this->parseUrl());

        if ($ContArray > 2) {
            foreach ($this->parseUrl() as $Key => $Value) {
                if ($Key > 1) {
                    $this->setParam($this->Param += [$Key => $Value]);
                }
            }
        }
	}

#GETTERS AND SETTERS


    /**
     * @return mixed
     */
    protected function getMethod()
    {
        return $this->Method;
    }

    /**
     * @param mixed $Method
     *
     * @return self
     */
    public function setMethod($Method)
    {
        $this->Method = $Method;

        return $this;
    }

    /**
     * @return mixed
     */
    protected function getParam()
    {
        return $this->Param;
    }

    /**
     * @param mixed $Param
     *
     * @return self
     */
    public function setParam($Param)
    {
        $this->Param = $Param;

        return $this;
    }

    /**
     * @return mixed
     */
    protected function getObj()
    {
        return $this->Obj;
    }

    /**
     * @param mixed $Obj
     *
     * @return self
     */
    public function setObj($Obj)
    {
        $this->Obj = $Obj;

        return $this;
    }
}
