<?php
namespace App\Model\Table;

use App\Model\Entity\MealCategory;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MealCategory Model
 */
class MealCategoryTable extends Table
{

   
  

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('meal_category');
        $this->displayField('id');
        $this->primaryKey('id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id', 'create')
            ->requirePresence('item1', 'create')
            ->notEmpty('item1')
            ->requirePresence('item2', 'create')
            ->notEmpty('item2')
            ->requirePresence('item3', 'create')
            ->notEmpty('item3')
            ->requirePresence('item4', 'create')
            ->notEmpty('item4')
            ->requirePresence('item5', 'create')
            ->notEmpty('item5')
            ->requirePresence('category', 'create')
            ->notEmpty('category')
            ->add('did', 'valid', ['rule' => 'numeric'])
            ->requirePresence('did', 'create')
            ->notEmpty('did')
            ->add('pid', 'valid', ['rule' => 'numeric'])
            ->requirePresence('pid', 'create')
            ->notEmpty('pid');

        return $validator;
    }
}
