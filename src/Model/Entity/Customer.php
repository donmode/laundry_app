<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Customer Entity
 *
 * @property int $id
 * @property string $full_name
 * @property string $phone_number
 * @property string|null $email
 * @property string $address
 * @property \Cake\I18n\FrozenDate|null $birthday
 * @property \Cake\I18n\FrozenDate|null $wedding_anniversary
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\LaundryRequest[] $laundry_requests
 */
class Customer extends Entity
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
        'full_name' => true,
        'phone_number' => true,
        'email' => true,
        'address' => true,
        'birthday' => true,
        'wedding_anniversary' => true,
        'created' => true,
        'modified' => true,
        'laundry_requests' => true,
    ];
}
