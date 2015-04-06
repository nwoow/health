<?php
// src/Model/Table/UsersTable.php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\ORM\TableRegistry;
use Cake\Event\Event;
use Cake\Network\Exception\NotFoundException;


class MessagesTable extends Table
{
	

 public function initialize(array $config)
    {
        $this->primaryKey('id');
    }
	
	public function validationDefault(Validator $validator)
    {
        $validator
            ->notEmpty('title')
            ->notEmpty('messages');

        return $validator;
    }
	

	
function pMessages($id = null) {
	
   
   $query = $this->find()
    ->select(['message', 'title'])
    ->where(['user1' => $id]);
   $results = $query->all();
   $data = $results->toArray();
   
   
	
  return $data;

   
}
    
function dMessages($id = null) {
	
   
   $query = $this->find()
    ->select(['message', 'title'])
    ->where(['user2' => $id]);
   $results = $query->all();
   $data = $results->toArray();
   
   
	
  return $data;

   
}	

		
}