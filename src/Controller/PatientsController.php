<?php 
// src/Controller/UsersController.php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Network\Exception\NotFoundException;
use Cake\ORM\TableRegistry;

class PatientsController extends AppController
{ 


	     public function isAuthorized($user)
     {
   return true;

       }

public function index (){
		
	 
	 $id = $this->Auth->user('id');
       $articles = TableRegistry::get('Users');
     $query = $articles->find()
	    ->where(['id' => $id]);
       
     $this->set(compact('query'));

	 
	
	 
	   $meals = TableRegistry::get('Meals');
     $query1 = $meals->find()
	    ->where(['user_id' => $id]);
       
       
	  
   $this->set(compact('query1'));
      
}
	

}