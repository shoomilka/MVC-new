<?php

class UserController {
	static function login(){
		if($_SERVER['REQUEST_METHOD'] == 'POST'){
			
			if (!empty($_POST['username']) && !empty($_POST['password'])) {
				$username = $_POST['username'];
				$password = $_POST['password'];
				
				require(__DIR__ . '/../config.php');
				$result = mysqli_query($link, "SELECT * FROM users WHERE `username` = \"$username\"", MYSQLI_USE_RESULT);
				$user = $result->fetch_object();

				$result->close();
				mysqli_close($link);
				
				if (password_verify($password, $user->password)) {
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