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
			$email = test_input($_POST["email"]);
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  				$message = "Invalid email format";
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