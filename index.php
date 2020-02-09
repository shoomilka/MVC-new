<?php

$url = $_SERVER['REQUEST_URI'];
$controller = explode('/', $url)[2] ?? 'list';

require(__DIR__ . '/bootstrap.php');

if($controller == 'list'){
	require('controllers/TaskController.php');
	TaskController::getTasks();
}elseif($controller == 'login'){
	require('controllers/UserController.php');
	UserController::login();
}else{
	require('controllers/ErrorController.php');
	ErrorController::error();
}

