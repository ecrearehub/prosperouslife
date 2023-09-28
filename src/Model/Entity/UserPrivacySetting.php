<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * UserPrivacySetting Entity
 *
 * @property int $id
 * @property int|null $user_id
 * @property int|null $birthday
 * @property int|null $goals
 * @property int|null $skills
 * @property int|null $projects
 * @property int|null $legasy
 * @property int|null $trees
 * @property int|null $email
 * @property int|null $phone
 * @property int|null $mobile
 * @property string|null $created
 * @property string|null $updated
 *
 * @property \App\Model\Entity\User $user
 */
class UserPrivacySetting extends Entity
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
        'birthday' => true,
        'goals' => true,
        'skills' => true,
        'projects' => true,
        'legasy' => true,
        'trees' => true,
        'email' => true,
        'phone' => true,
        'mobile' => true,
        'created' => true,
        'updated' => true,
        'user' => true,
    ];
}
