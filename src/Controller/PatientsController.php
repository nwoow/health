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
      $meals = TableRegistry::get('MealCategory');
     $query1 = $meals->find()
	    ->where(['pid' => $id]);
		
		
		 foreach ($query1 as $row) {
			echo  $did = $row->did;
			 
			  
		
		 $meals = TableRegistry::get('Users');
         $query2 = $meals->find()
	      ->where(['id' => $did]);
     
       }
	  
   $this->set(compact('query1'));
    $this->set(compact('query2'));
      
	  
	  
}
	

}