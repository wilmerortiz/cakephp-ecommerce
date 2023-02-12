<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Subcategory Entity
 *
 * @property int $id
 * @property int|null $category_id
 * @property string|null $name
 * @property string|null $url
 * @property string|null $image
 * @property string|null $description
 * @property int|null $status
 *
 * @property \App\Model\Entity\Category $category
 * @property \App\Model\Entity\Product[] $products
 */
class Subcategory extends Entity
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
        'category_id' => true,
        'name' => true,
        'url' => true,
        'image' => true,
        'description' => true,
        'status' => true,
        'category' => true,
        'products' => true,
    ];
}