<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * MealCategory Entity.
 */
class MealCategory extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'item1' => true,
        'item2' => true,
        'item3' => true,
        'item4' => true,
        'item5' => true,
        'category' => true,
        'did' => true,
        'pid' => true,
    ];
}
