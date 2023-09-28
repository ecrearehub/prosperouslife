<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * DonationsOperation Entity
 *
 * @property int $id
 * @property int|null $donation_id
 * @property int|null $operation_id
 *
 * @property \App\Model\Entity\Donation $donation
 * @property \App\Model\Entity\Operation $operation
 */
class DonationsOperation extends Entity
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
        'donation_id' => true,
        'operation_id' => true,
        'donation' => true,
        'operation' => true,
    ];
}
