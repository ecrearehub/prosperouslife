<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Country Entity
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $flag
 * @property string|null $iso_code
 * @property string|null $phone_code
 * @property int|null $country_status_id
 *
 * @property \App\Model\Entity\CountryStatus $country_status
 * @property \App\Model\Entity\Project[] $projects
 * @property \App\Model\Entity\User[] $users
 */
class Country extends Entity
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
        'flag' => true,
        'iso_code' => true,
        'phone_code' => true,
        'country_status_id' => true,
        'country_status' => true,
        'projects' => true,
        'users' => true,
    ];
}
