<?php 
// src/Controller/UsersController.php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Network\Exception\NotFoundException;
use Cake\ORM\TableRegistry;
class UsersController extends AppController
{
     public function isAuthorized($user)
{
   return true;

}

   public function beforeFilter(Event $event)
{
    parent::beforeFilter($event);
    // Allow users to register and logout.
    // You should not add the "login" action to allow list. Doing so would
    // cause problems with normal functioning of AuthComponent.
    $this->Auth->allow(['logout']);
}

 public function login(){
 if ($this->request->is('post')) {
    $user = $this->Auth->identify();
    if ($user['role'] === 'dietitian') {
        $this->Auth->setUser($user);
        return $this->redirect(['controller' => 'users' ,'action' =>'index']);
    } 
    else if ($user['role'] === 'patient'){
         $this->Auth->setUser($user);
        return $this->redirect(['action' => 'index' ,'controller' => 'patients']);
    }
    $this->Flash->error(__('Invalid username or password, try again'));
}
}

public function logout()
{
    return $this->redirect($this->Auth->logout());
}

     public function index()
     {
		 
		
		 
			 $id = $this->Auth->user('id');
       $articles = TableRegistry::get('Users');
     $query = $articles->find()
	    ->where(['id' => $id]);
       
     $this->set(compact('query'));
        
    }

   

    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));
                return $this->redirect(['action' => 'add']);
            }
            $this->Flash->error(__('Unable to add the user.'));
        }
        $this->set('user', $user);
    }

}