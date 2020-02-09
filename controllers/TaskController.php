<?php

class TaskController {
	static function getTasks($page = 1){
		$tasks = Task::getThreeTasks($page);
		$count = Task::getCountOfPages();
		require(__DIR__ . '/../views/list.php');
		return;
	}

	static function createNewTask(){
		if($_SERVER['REQUEST_METHOD'] == 'POST'){
			$email = htmlentities($_POST["email"]);
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  				$message = "Invalid email format";
			}
			$name = htmlentities($_POST["name"]);
			$text = htmlentities($_POST["text"]);
			if($name == '' || $text == '' || $email == ''){
				$message = "Fill all fields!";
			} else {
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
}