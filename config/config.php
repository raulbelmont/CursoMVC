<?php
#Arquivos diretórios raízes
$PastaInterna="CursoMVC/";
define("DIRPAGE","http://{$_SERVER['HTTP_HOST']}/{$PastaInterna}");

if (substr($_SERVER['DOCUMENT_ROOT'],-1) == '/') {
	define("DIRREQ", "{$_SERVER['DOCUMENT_ROOT']}{$PastaInterna}");
}else{
	define("DIRREQ", "{$_SERVER['DOCUMENT_ROOT']}/{$PastaInterna}");
}

#Diretórios específicos
define("DIRIMG", DIRPAGE."public/img/");
define("DIRCSS", DIRPAGE."public/css/");
define("DRIADMIN", DIRPAGE."public/admin/");
define("DIRAUDIO", DIRPAGE."public/audio/");
define("DIRDESIGN", DIRPAGE."public/design/");
define("DIRFONTS", DIRPAGE."public/fonts/");
define("DIRJS", DIRPAGE."public/js/");
define("DIRVIDEO", DIRPAGE."public/video/");

#Acesso ao bando de dados
define("DBHOST","localhost");
define("DBNAME","sistema");
define("DBUSER","root");
define("DBPASS","");
