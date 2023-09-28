<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Language Entity
 *
 * @property int $id
 * @property string|null $name
 * @property int|null $language_status_id
 *
 * @property \App\Model\Entity\LanguageStatus $language_status
 * @property \App\Model\Entity\Conference[] $conferences
 * @property \App\Model\Entity\News[] $news
 * @property \App\Model\Entity\User[] $users
 */
class Language extends Entity
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
        'language_status_id' => true,
        'language_status' => true,
        'conferences' => true,
        'news' => true,
        'users' => true,
    ];
}
