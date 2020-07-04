<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Payment Entity
 *
 * @property int $id
 * @property int $laundry_request_id
 * @property int $payment_option_id
 * @property bool|null $full_payment
 * @property float $amount
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\LaundryRequest[] $laundry_requests
 * @property \App\Model\Entity\PaymentOption $payment_option
 */
class Payment extends Entity
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
        'payment_option_id' => true,
        'full_payment' => true,
        'amount' => true,
        'created' => true,
        'modified' => true,
        'laundry_requests' => true,
        'payment_option' => true,
    ];
}
