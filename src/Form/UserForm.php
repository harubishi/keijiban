<?php

namespace App\Form;

use Cake\Form\Form;
use Cake\Form\Schema;
use Cake\Validation\Validator;

class UserForm extends Form{

	protected function _buildValidator(Validator $validator)
	{
		$validator
			->notEmpty('name','名前を入力してください')
			->add('name',[
				'isMaxLength' =>[
					'rule' => ['maxLength',100],
					'message' => '名前は100文字以内で入力してください'
				]
			])
			->notEmpty('password','パスワードを入力してください');

		return $validator;

	}
}