<?php
namespace App\Model\Table;

use App\Model\Entity\Food;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Foods Model
 */
class FoodsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('foods');
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
            ->requirePresence('name_food', 'create')
            ->notEmpty('name_food')
            ->add('calorie', 'valid', ['rule' => 'numeric'])
            ->requirePresence('calorie', 'create')
            ->notEmpty('calorie')
            ->requirePresence('link', 'create')
            ->notEmpty('link');

        return $validator;
    }
}
