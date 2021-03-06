<?php

class User{
    private $id;
    private $username;
    private $password;

    function __construct($mysql_user){
        $this->id = $mysql_user->id;
        $this->username = $mysql_user->username;
        $this->password = $mysql_user->password;
    }
	
	public function getUsername()
    {
        return $this->username;
    }

    public function getPassword()
    {
        return $this->password;
    }

    static function loadUserByName($username){
        require_once(__DIR__ . '/../config.php');
        $link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

        if (!$link) {
            exit;
        }
        $result = mysqli_query($link, "SELECT * FROM users WHERE `username` = \"$username\"");
        if(mysqli_num_rows($result) == 1){
            $result = mysqli_query($link, "SELECT * FROM users WHERE `username` = \"$username\"", MYSQLI_USE_RESULT);
            $mysql_user = $result->fetch_object();
            $user = new User($mysql_user);
        }else{
            return false;
        }

		$result->close();
        mysqli_close($link);
        
        return $user;
    }
}
