<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * BillingAddres Entity
 *
 * @property int $id
 * @property int|null $user_id
 * @property string|null $address
 * @property int|null $country_id
 * @property string|null $state
 * @property string|null $address_number
 * @property string|null $reference
 * @property int|null $status
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Country $country
 */
class BillingAddres extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'user_id' => true,
        'address' => true,
        'country_id' => true,
        'state' => true,
        'address_number' => true,
        'reference' => true,
        'status' => true,
        'created' => true,
        'modified' => true,
        'user' => true,
        'country' => true,
    ];
}
