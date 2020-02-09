<?php

$url = $_SERVER['REQUEST_URI'];
$controller = explode('/', $url)[2] ?? 'list';
echo $controller;



if($controller == 'list'){
	//
}elseif($controller == 'login'){
	require('controllers/UserController.php');
	UserController::login();
}else{
	require('controllers/ErrorController.php');
	ErrorController::error();
}

