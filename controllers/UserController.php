<?php

class UserController {
	static function login(){
		if($_SERVER['REQUEST_METHOD'] == 'POST'){
			
			if (!empty($_POST['username']) && !empty($_POST['password'])) {
				$username = $_POST['username'];
				$password = $_POST['password'];
				
				$user = User::loadUserByName($username);
				
				if (password_verify($password, $user->getPassword())) {
					$_SESSION['valid'] = true;
					$_SESSION['timeout'] = time();
					$_SESSION['username'] = $username;
					header('Location: /index.php');
					return;
				}else {
					$msg = 'Wrong username or password';
               }
            }
		}
		require(__DIR__ . '/../views/login.php');
		return;
		
	}
}