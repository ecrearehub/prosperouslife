<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Tree Entity
 *
 * @property int $id
 * @property int|null $tree_status_id
 * @property int|null $tree_type_id
 * @property int|null $tree_kind_id
 * @property string|null $location
 * @property string|null $created
 * @property string|null $updated
 *
 * @property \App\Model\Entity\TreeStatus $tree_status
 * @property \App\Model\Entity\TreeType $tree_type
 * @property \App\Model\Entity\TreeKind $tree_kind
 * @property \App\Model\Entity\Order[] $orders
 * @property \App\Model\Entity\User[] $users
 */
class Tree extends Entity
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
        'tree_status_id' => true,
        'tree_type_id' => true,
        'tree_kind_id' => true,
        'location' => true,
        'created' => true,
        'updated' => true,
        'tree_status' => true,
        'tree_type' => true,
        'tree_kind' => true,
        'orders' => true,
        'users' => true,
    ];
}
