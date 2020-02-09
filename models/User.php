<?php

namespace Models;

/**
 * @ORM\Entity
 * @ORM\Table(name="users")
 */

class User{
    private $id;
	private $username;
	private $createdAt;
	private $updatedAt;
	
	public function getUsername()
    {
        return $this->username;
    }
}
