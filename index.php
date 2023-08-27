<?php

$controller = $_GET['controller'];
$metodo = $_GET['acao'];

$controller .= 'Controller';

require_once $_SERVER ['DOCUMENT_ROOT'] . '/aula3/controller/' . $controller . '.php';
//require_once $_SERVER ['DOCUMENT_ROOT'] . '/php-development-environment-main/controller/EstudanteController.php';

//$estudante = new EstudanteController(); 

$objeto = new $controller();
$objeto->$metodo();