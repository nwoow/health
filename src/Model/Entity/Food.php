<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Food Entity.
 */
class Food extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'name_food' => true,
        'calorie' => true,
        'link' => true,
    ];
}
