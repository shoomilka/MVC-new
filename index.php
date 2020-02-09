<?php

$url = $_SERVER['REQUEST_URI'];
$controller = explode('/', $url)[2] ?? 'list';

require(__DIR__ . '/bootstrap.php');

if($controller === 'list'){
	require('controllers/TaskController.php');
	if(isset(explode('/', $url)[3])){
		TaskController::getTasks((int)explode('/', $url)[3]);
	} else {
		TaskController::getTasks();
	}
}elseif($controller === 'login'){
	require('controllers/UserController.php');
	UserController::login();
}elseif($controller === 'completed'){
	if(isset(explode('/', $url)[3])){
		require('controllers/TaskController.php');
		TaskController::setCompleted((int)explode('/', $url)[3]);
	}else{
		require('controllers/ErrorController.php');
		ErrorController::error();
	}
}elseif($controller === 'create'){
	require('controllers/TaskController.php');
	TaskController::createNewTask();
}elseif($controller === 'edit'){
	require('controllers/TaskController.php');
	if(isset(explode('/', $url)[3])){
		TaskController::editTask((int)explode('/', $url)[3]);
	}else{
		require('controllers/ErrorController.php');
		ErrorController::error();
	}
}else{
	require('controllers/ErrorController.php');
	ErrorController::error();
}

