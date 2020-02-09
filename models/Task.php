<?php

namespace Models;

/**
 * @ORM\Entity
 * @ORM\Table(name="tasks")
 */

class Task{
    private $id;
	private $user_id;
	private $is_completed;
    private $title;
	private $text;
	private $createdAt;
	private $updatedAt;
	
	public function getId()
    {
        return $this->id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }
	
	public function getText()
    {
        return $this->text;
    }

    public function setText($text)
    {
        $this->text = $text;
    }
}