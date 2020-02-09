<?php

class TaskController {
	static function getTasks($page = 1){
		$tasks = Task::getThreeTasks($page);
		require(__DIR__ . '/../views/list.php');
		return;
	}
}