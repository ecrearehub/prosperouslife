<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Sale Entity
 *
 * @property int $id
 * @property int|null $user_id
 * @property string|null $own
 * @property string|null $downline
 * @property string|null $total
 * @property string|null $percent
 * @property string $cp_own
 * @property string $cp_downline
 * @property string $cashback
 *
 * @property \App\Model\Entity\User $user
 */
class Sale extends Entity
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
        'own' => true,
        'downline' => true,
        'total' => true,
        'percent' => true,
        'cp_own' => true,
        'cp_downline' => true,
        'cashback' => true,
        'user' => true,
    ];
}
