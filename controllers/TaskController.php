<?php

class TaskController {
	static function getTasks($page = 1, $sort = 'id'){
		$tasks = Task::getThreeTasks($page, $sort);
		$count = Task::getCountOfPages();
		require(__DIR__ . '/../views/list.php');
		return;
	}

	static function createNewTask(){
		if($_SERVER['REQUEST_METHOD'] == 'POST'){
			$email = htmlentities($_POST["email"]);
			$message = '';
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  				$message = "Invalid email format";
			}
			$name = htmlentities($_POST["name"]);
			$text = htmlentities($_POST["text"]);
			if($name == '' || $text == '' || $email == ''){
				$message = "Fill all fields!";
			} 
			if($message == '') {
				Task::createNewTask($name, $email, $text);
				$message = "Task added successfully!";
			}
		}
		require(__DIR__ . '/../views/create.php');
		return;
	}

	static function setCompleted($id){
		Task::setCompleted($id);
		header('Location: /index.php');
	}

	static function editTask($id){
		if($_SERVER['REQUEST_METHOD'] == 'POST'){
			$email = htmlentities($_POST["email"]);
			$message = '';
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  				$message = "Invalid email format";
			}
			$name = htmlentities($_POST["name"]);
			$text = htmlentities($_POST["text"]);
			if($name == '' || $text == '' || $email == ''){
				$message = "Fill all fields!";
			}
			if($message == '')  {
				Task::editTask($id, $name, $email, $text);
				$message = "Task edited successfully!";
			}
		}
		$task = Task::getById($id);
		require(__DIR__ . '/../views/edit.php');
		return;
	}
}