<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * OrdersTree Entity
 *
 * @property int $id
 * @property int|null $order_id
 * @property int|null $tree_id
 *
 * @property \App\Model\Entity\Order $order
 * @property \App\Model\Entity\Tree $tree
 */
class OrdersTree extends Entity
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
        'order_id' => true,
        'tree_id' => true,
        'order' => true,
        'tree' => true,
    ];
}
