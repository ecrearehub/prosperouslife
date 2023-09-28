<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Item Entity
 *
 * @property int $id
 * @property int|null $item_category_id
 * @property string|null $name
 * @property string|null $short_description
 * @property string|null $description
 * @property string|null $price
 * @property string|null $tax
 * @property int|null $parts
 * @property int|null $item_status_id
 * @property int|null $item_type_id
 * @property string $sourcecode
 * @property string|null $created
 * @property string|null $updated
 *
 * @property \App\Model\Entity\ItemCategory $item_category
 * @property \App\Model\Entity\ItemStatus $item_status
 * @property \App\Model\Entity\ItemType $item_type
 * @property \App\Model\Entity\Order[] $orders
 */
class Item extends Entity
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
        'item_category_id' => true,
        'name' => true,
        'short_description' => true,
        'description' => true,
        'price' => true,
        'tax' => true,
        'parts' => true,
        'item_status_id' => true,
        'item_type_id' => true,
        'sourcecode' => true,
        'created' => true,
        'updated' => true,
        'item_category' => true,
        'item_status' => true,
        'item_type' => true,
        'orders' => true,
    ];
}
