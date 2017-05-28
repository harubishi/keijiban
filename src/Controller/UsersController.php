<?php

namespace App\Controller;

use Cake\Core\Configure;
use Cake\Network\Exception\ForbiddenException;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use App\Form\UserForm;
use Cake\ORM\TableRegistry;
use Cake\Event\Event;


class UsersController extends AppController
{
	public function beforeFilter(Event $event)
	{
		parent::beforeFilter($event);
		$this->Auth->allow(['signUp','logout']);
	}

    public function signUp()
    {
    	$UserForm = new UserForm();
    	$this->set('UserForm',$UserForm);

    	if(!$this->request->is('post')){
    		return $this->render();
    	}

    	$formData = $this->request->data;
    	if(!$UserForm->validate($formData)){
    		return $this->render();
    	}

    	$UserTable = TableRegistry::get('Users');
    	$UserRow = $UserTable->newEntity()
    		->setName($formData['name'])
    		->setPassword($formData['password'])
    		->setTimeStamp();

    	if(!$UserTable->save($UserRow)){
    		throw new InternalErrorException();
    	}

    	$this->Auth->setUser($UserRow);
    	$this->redirect($this->Auth->redirectUrl());
    }

    public function login()
    {
    	
    	if(!$this->request->is('post')){
    		return $this->render();
    	}

    	 $user = $this->Auth->identify();

    	 if(!$user){
    	 	$this->Flash->error('ニックネームかパスワードが間違っています',['key' => 'auth']);
    	 	return $this->render();
    	 }
        $this->Auth->setUser($user);
        $this->redirect($this->Auth->redirectUrl());
    	
    }

    public function logout()
    {
    	$this->request->session()->destroy();
    	$this->redirect($this->Auth->logout());
    }
}
