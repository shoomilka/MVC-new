<?php

class UserController {
	static function login(){
		$msg = "";
		if($_SERVER['REQUEST_METHOD'] == 'POST'){
			
			if (!empty($_POST['username']) && !empty($_POST['password'])) {
				$username = $_POST['username'];
				$password = $_POST['password'];
				
				$user = User::loadUserByName($username);
				
				if (password_verify($password, $user->getPassword())) {
					session_start();
					
					$_SESSION['valid'] = true;
					$_SESSION['timeout'] = time();
					$_SESSION['username'] = $username;
					header('Location: /index.php');
					return;
				}else {
					$msg = 'Wrong username or password';
               }
            } else {
				$msg = "Fill the inputs!";
			}
		}
		require(__DIR__ . '/../views/login.php');
		return;
		
	}
}