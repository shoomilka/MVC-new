<?php

class TaskController {
	static function getTasks($page = 1){
		$tasks = Task::getThreeTasks($page);
		$count = Task::getCountOfPages();
		require(__DIR__ . '/../views/list.php');
		return;
	}
}