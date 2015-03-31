<?php 
// src/Controller/UsersController.php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Network\Exception\NotFoundException;
use Cake\ORM\TableRegistry;

class MealsController extends AppController
{
	
	
	     public function isAuthorized($user)
{
   return true;

}
	
	public function index (){
		
		
		$this->set('meals', $this->Meals->find('all'));
			
	}
	
		
		
			public function add()
    {
        $meal = $this->Meals->newEntity();
        if ($this->request->is('post')) {
            $article = $this->Meals->patchEntity($meal, $this->request->data);
            if ($this->Meals->save($meal)) {
                $this->Flash->success(__('Your article has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to add your article.'));
        }
        $this->set('meal', $meal);
    }
		
		
		public function assign ($id = null) {
			
			
		if (!$id) {
        throw new NotFoundException(__('Invalid article'));
          }

    $meal = $this->Meals->get($id);
    if ($this->request->is(['post', 'put'])) {
        $this->Meals->patchEntity($meal, $this->request->data);
        if ($this->Meals->save($meal)) {
            $this->Flash->success(__('Your article has been updated.'));
            return $this->redirect(['action' => 'index']);
        }
        $this->Flash->error(__('Unable to update your article.'));
    }
	$users = TableRegistry::get('Users')
    ->find('list', ['valueField' => 'username'])
    ->select(['id' ,'username'])
    ->where(['role' => 'patient']);
   $this->set('users', $users);
     
	 

    $this->set('meal', $meal);
 

			
			
		}
	
}