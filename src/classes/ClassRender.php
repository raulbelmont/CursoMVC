<?php
namespace Src\classes;

class ClassRender
{

	#Propriedades
	private $Dir;
	private $Title;
	private $Description;
	private $Keywords;

	public function getDir() { return $this->Dir;}
    public function setDir($Dir) { $this->Dir = $Dir; return $this; }
    public function getTitle() { return $this->Title; }
    public function setTitle($Title) { $this->Title = $Title; return $this; }
    public function getDescription() { return $this->Description; }
    public function setDescription($Description) { $this->Description = $Description; return $this; }
    public function getKeywords() { return $this->Keywords; }
    public function setKeywords($Keywords) { $this->Keywords = $Keywords; return $this; }

	#Método responsável por renderizar todo o layout
	public function renderLayout()
	{
		include_once(DIRREQ."app/view/Layout.php");
	}

	#Adiiona características específicas no head
	public function addHead()
	{
		if (file_exists(DIRREQ."app/view/{$this->getDir()}/Main.php")) {
			include(DIRREQ."app/view/{$this->getDir()}/Main.php");
		}
	}

	#Adiciona características específicas no main
	public function addMain()
	{

	}

	#Adiciona características específicas no footer
	public function addFooter()
	{

	}
}
