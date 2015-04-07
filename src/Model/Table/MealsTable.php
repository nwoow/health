<?php
// src/Model/Table/UsersTable.php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\ORM\TableRegistry;
use Cake\ORM\RulesChecker;

class MealsTable extends Table
{
	
	public function buildRules(RulesChecker $rules)
{ 

$rules->add($rules->isUnique(['user_id']));
 return $rules;

}
	

}