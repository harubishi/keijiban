<?php

namespace App\Model\Entity;


use Cake\Auth\DefaultPasswordHasher;
use Cake\ORM\Entity;

class User extends Entity{

	public function getName()
	{
		return !empty($this->name)? $this->name : false;
	}

	public function setName($val)
	{
		$this->name = $val;
		return $this;
	}

	public function setPassword($val)
	{
		$this->password = $this->__hashPassword($val);
		return $this;
	}

	public function setTimeStamp()
	{
		$date = date('Y-m-d H:i:s');
		$this->created = $date;
		$this->modified = $date;
		return $this;
	}

	private function __hashPassword($password)
	{
		return (new DefaultPasswordHasher)->hash($password); 
	}

} 