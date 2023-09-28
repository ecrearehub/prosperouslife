<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Order Entity
 *
 * @property int $id
 * @property int|null $user_id
 * @property string|null $amount
 * @property int|null $order_status_id
 * @property string|null $created
 * @property string|null $updated
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\OrderStatus $order_status
 * @property \App\Model\Entity\OrderNote[] $order_notes
 * @property \App\Model\Entity\Item[] $items
 * @property \App\Model\Entity\Tree[] $trees
 */
class Order extends Entity
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
        'amount' => true,
        'order_status_id' => true,
        'created' => true,
        'updated' => true,
        'user' => true,
        'order_status' => true,
        'order_notes' => true,
        'items' => true,
        'trees' => true,
    ];
}
