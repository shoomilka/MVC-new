<?php

class ErrorController {
	static function error(){
		require(__DIR__ . '/../views/error.php');
		return;
	}
}