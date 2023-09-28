<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * UsersLanguage Entity
 *
 * @property int $id
 * @property int|null $user_id
 * @property int|null $language_id
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Language $language
 */
class UsersLanguage extends Entity
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
        'language_id' => true,
        'user' => true,
        'language' => true,
    ];
}
