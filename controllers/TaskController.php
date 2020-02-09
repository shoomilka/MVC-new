<?php

class TaskController {
	static function getTasks(){
		require(__DIR__ . '/../config.php');
		
		$result = mysqli_query($link, 'SELECT * FROM `tasks`', MYSQLI_USE_RESULT);
		$tasks = [];

		if ($result) {
			while($obj = $result->fetch_object()){	
				$tasks[] = $obj;
			}
		}
		
		$result->close();
		mysqli_close($link);
		require(__DIR__ . '/../views/list.php');
		return;
	}
}