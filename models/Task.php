<?php

class Task{
    private $id;
    private $is_completed;
    private $was_edited;
    private $text;
    private $name;
    private $email;

    function __construct($obj){
        $this->id = $obj->id;
        $this->text = $obj->text;
        $this->name = $obj->name;
        $this->email = $obj->email;
        $this->is_completed = $obj->is_completed;
        $this->was_edited = $obj->was_edited;
    }

    static function getThreeTasks($page, $sort) {
        require_once(__DIR__ . '/../config.php');
        $link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

        if (!$link) {
            exit;
        }

        $sql_order = '';
        if($sort == 'namea'){
            $sql_order = ' ORDER BY `tasks`.`name` ASC';
        }elseif($sort == 'named'){
            $sql_order = ' ORDER BY `tasks`.`name` DESC';
        }elseif($sort == 'emaila'){
            $sql_order = ' ORDER BY `tasks`.`email` ASC';
        }elseif($sort == 'emaild'){
            $sql_order = ' ORDER BY `tasks`.`email` DESC';
        }elseif($sort == 'statusa'){
            $sql_order = ' ORDER BY `tasks`.`is_completed` ASC';
        }elseif($sort == 'statusd'){
            $sql_order = ' ORDER BY `tasks`.`is_completed` DESC';
        }

		$offset = ($page - 1)*3;
		$result = mysqli_query($link, 'SELECT * FROM `tasks` ' . $sql_order . ' LIMIT 3 OFFSET ' . (int)$offset, MYSQLI_USE_RESULT);
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

    public function wasEdited(){
        return $this->was_edited;
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

    static function createNewTask($name, $email, $text){
        require_once(__DIR__ . '/../config.php');
        $link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

        if (!$link) {
            exit;
        }

        $result = mysqli_query($link, 'INSERT INTO `tasks` (`name`, `email`, `text`)
                            VALUES ("' . $name . '", "' . $email .'", "'. $text .'")');
        mysqli_close($link);
    }

    static function editTask($id, $name, $email, $text){
        require_once(__DIR__ . '/../config.php');
        $link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

        if (!$link) {
            exit;
        }

        $result = mysqli_query($link, 'UPDATE `tasks` SET `name`="'.$name.'", `email`="'.$email
                                    .'", `text`="'.$text.'", `was_edited`=1 WHERE `id`='.$id);

        mysqli_close($link);
    }

    static function getById($id){
        require_once(__DIR__ . '/../config.php');
        $link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

        if (!$link) {
            exit;
        }

        $result = mysqli_query($link, 'SELECT * FROM `tasks` WHERE id='.$id);
        if ($result) {
            $obj = $result->fetch_object();	
			$task = new Task($obj);
        }
        $result->close();
        mysqli_close($link);
        return $task;
    }
}