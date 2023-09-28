<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * OrderNote Entity
 *
 * @property int $id
 * @property int|null $order_id
 * @property string|null $note
 * @property string|null $created
 * @property string|null $updated
 *
 * @property \App\Model\Entity\Order $order
 */
class OrderNote extends Entity
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
        'note' => true,
        'created' => true,
        'updated' => true,
        'order' => true,
    ];
}
