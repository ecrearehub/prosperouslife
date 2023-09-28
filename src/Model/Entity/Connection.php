<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Connection Entity
 *
 * @property int $id
 * @property string|null $name
 *
 * @property \App\Model\Entity\DonationsConection[] $donations_conections
 * @property \App\Model\Entity\Operation[] $operations
 */
class Connection extends Entity
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
        'name' => true,
        'donations_conections' => true,
        'operations' => true,
    ];
}
