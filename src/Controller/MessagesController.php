<?php 
// src/Controller/UsersController.php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Network\Exception\NotFoundException;
use Cake\ORM\TableRegistry;

class MessagesController extends AppController
{

    

     public function isAuthorized($user)
     {
   return true;

       }



	public function index() {
		
		
		 
		
		
	}
	
	
	  public function add($pid ,$did)
    {
        $message = $this->Messages->newEntity();
        if ($this->request->is('post')) {
            $message = $this->Messages->patchEntity($message, $this->request->data);
            if ($this->Messages->save($message)) {
                $this->Flash->success(__('Your message has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to sendmessage'));
        }
		
	
		$this->set('pid', $pid );
		$this->set('did', $did );
        $this->set('message', $message);
    }
	
	
	
	
	 public function view($pid)
    {
		  $user = $this->Auth->user('role');
		  echo $user;
		
	  $this->set('user', $user );
		if ($user === 'dietitian') {
			$data = $this->Messages->pMessages($this->Auth->user('id'));
			$this->set('data', $data );
		} elseif ($user === 'patient') {
		
     
	   $data1 = $this->Messages->dMessages($this->Auth->user('id'));
	   
	   
	   $this->set('data1', $data1 );
	 
		  
		 echo  $this->Auth->user('username');
		 
		
    }
	
	
	}
}