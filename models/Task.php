<?php

class Task{
    private $id;
	private $user_id;
	private $is_completed;
    private $title;
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

    public function getTitle(){
        return $this->title;
    }

    public function setTitle($title){
        $this->title = $title;
    }
	
	public function getText(){
        return $this->text;
    }

    public function setText($text){
        $this->text = $text;
    }
}