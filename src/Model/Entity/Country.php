<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Country Entity
 *
 * @property int $id
 * @property string|null $nombre
 * @property string|null $name
 * @property string|null $nom
 * @property string|null $iso2
 * @property string|null $iso3
 * @property string|null $phone_code
 * @property string|null $estado
 *
 * @property \App\Model\Entity\BillingAddres[] $billing_address
 * @property \App\Model\Entity\ShippingAddres[] $shipping_address
 * @property \App\Model\Entity\User[] $users
 */
class Country extends Entity
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
        'nombre' => true,
        'name' => true,
        'nom' => true,
        'iso2' => true,
        'iso3' => true,
        'phone_code' => true,
        'estado' => true,
        'billing_address' => true,
        'shipping_address' => true,
        'users' => true,
    ];
}
