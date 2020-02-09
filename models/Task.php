<?php

class Task{
    private $id;
	private $user_id;
	private $is_completed;
    private $text;
    private $name;
    private $email;

    function __construct($obj){
        $this->id = $obj->id;
        $this->title = $obj->title;
        $this->text = $obj->text;
        $this->name = $obj->name;
        $this->email = $obj->email;
        $this->is_completed = $obj->is_completed;
    }

    static function getThreeTasks($page) {
        require_once(__DIR__ . '/../config.php');
        $link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

        if (!$link) {
            exit;
        }

		$offset = ($page - 1)*3;
		$result = mysqli_query($link, 'SELECT * FROM `tasks` LIMIT 3 OFFSET ' . (int)$offset, MYSQLI_USE_RESULT);
		$tasks = [];

		if ($result) {
			while($obj = $result->fetch_object()){	
				$tasks[] = new Task($obj);
			}
		}
        $result->close();
        mysqli_close($link);
        return $tasks;
    }

    static function getCountOfPages(){
        require_once(__DIR__ . '/../config.php');
        $link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

        if (!$link) {
            exit;
        }

        $result = mysqli_query($link, 'SELECT * FROM `tasks`');
        if ($result) {
            $count = ceil(mysqli_num_rows($result)/3);
        }
        $result->close();
        mysqli_close($link);
        return $count;
    }

    public function getId(){
        return $this->id;
    }

    public function getName(){
        return $this->name;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email = $email;
    }
	
	public function getText(){
        return $this->text;
    }

    public function setText($text){
        $this->text = $text;
    }

    public function isCompleted(){
        return $this->is_completed;
    }

    static function setCompleted($id){
        require_once(__DIR__ . '/../config.php');
        $link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

        if (!$link) {
            exit;
        }

        $result = mysqli_query($link, 'UPDATE `tasks` SET is_completed = 1 WHERE id='.$id);
        mysqli_close($link);
    }
}