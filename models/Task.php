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
        require(__DIR__ . '/../config.php');
		
		$result = mysqli_query($link, 'SELECT * FROM `tasks`', MYSQLI_USE_RESULT);
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