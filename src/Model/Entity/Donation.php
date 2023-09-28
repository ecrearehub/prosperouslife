<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Donation Entity
 *
 * @property int $id
 * @property int|null $user_id
 * @property int|null $project_id
 * @property string|null $amount
 * @property int|null $donation_status_id
 * @property string|null $created
 * @property string|null $updated
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Project $project
 * @property \App\Model\Entity\DonationStatus $donation_status
 * @property \App\Model\Entity\DonationsConection[] $donations_conections
 * @property \App\Model\Entity\Operation[] $operations
 */
class Donation extends Entity
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
        'project_id' => true,
        'amount' => true,
        'donation_status_id' => true,
        'created' => true,
        'updated' => true,
        'user' => true,
        'project' => true,
        'donation_status' => true,
        'donations_conections' => true,
        'operations' => true,
    ];
}
