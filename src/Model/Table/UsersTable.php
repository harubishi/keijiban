<?php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class UsersTable extends Table{

	
	public function initialzie(array $config)
	{
		$this->table('users');
	}


	public function getRowById($id)
	{
		$query = $this->find('all')
					->where(['id' => $id ,'valid' => 1]);
		return $query->first();
	}
}