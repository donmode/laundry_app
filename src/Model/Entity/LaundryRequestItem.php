<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * LaundryRequestItem Entity
 *
 * @property int $id
 * @property int $laundry_request_id
 * @property int $item_id
 * @property int $quantity
 * @property string|null $fabric_condition
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\LaundryRequest $laundry_request
 * @property \App\Model\Entity\Item $item
 */
class LaundryRequestItem extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'laundry_request_id' => true,
        'item_id' => true,
        'quantity' => true,
        'fabric_condition' => true,
        'created' => true,
        'modified' => true,
        'laundry_request' => true,
        'item' => true,
    ];
}
