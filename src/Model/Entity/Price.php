<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Price Entity
 *
 * @property int $id
 * @property int $item_id
 * @property float $price
 * @property string|null $meta
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Item $item
 */
class Price extends Entity
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
        'item_id' => true,
        'price' => true,
        'meta' => true,
        'created' => true,
        'modified' => true,
        'item' => true,
    ];
}
