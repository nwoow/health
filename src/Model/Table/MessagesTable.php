<?php
// src/Model/Table/UsersTable.php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\ORM\TableRegistry;

class MessagesTable extends Table
{
	
	
	
	public function validationDefault(Validator $validator)
    {
        $validator
            ->notEmpty('title')
            ->notEmpty('messages');

        return $validator;
    }
	
	
	
function myMessages() {
   $query = $this->find('all');
   $results = $query->all();
   $data = $results->toArray();
   
  return $data;

        

}
    	

		
}