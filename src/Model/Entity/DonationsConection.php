<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * DonationsConection Entity
 *
 * @property int $id
 * @property int|null $donation_id
 * @property int|null $connection_id
 * @property string|null $sourceid
 *
 * @property \App\Model\Entity\Donation $donation
 * @property \App\Model\Entity\Connection $connection
 */
class DonationsConection extends Entity
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
        'connection_id' => true,
        'sourceid' => true,
        'donation' => true,
        'connection' => true,
    ];
}
