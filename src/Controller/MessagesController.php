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
      $data = $this->Messages->myMessages();
	 
	 foreach ($data as $row){
	   echo $row->title;
	 }
      
		
		
		
    }
	
	
	
}