<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * UserSkill Entity
 *
 * @property int $id
 * @property int|null $user_id
 * @property string|null $description
 * @property int|null $hours
 * @property int|null $months
 * @property int|null $skill_blogging
 * @property int|null $skill_communication
 * @property int|null $skill_marketing
 * @property int|null $skill_systems
 * @property int|null $skill_web_development
 * @property int|null $skill_programming
 * @property int|null $skill_engineering
 * @property int|null $skill_accounting
 * @property int|null $skill_sales
 * @property int|null $skill_leadership
 * @property int|null $skill_teamwork
 * @property int|null $skill_coordination
 * @property int|null $skill_planning
 * @property int|null $skill_project_management
 * @property int|null $skill_negotiation
 * @property int|null $skill_networking
 * @property int|null $skill_entrepreneurship
 * @property int|null $skill_creativity
 * @property int|null $skill_designing
 * @property int|null $skill_photography
 * @property int|null $skill_film
 * @property int|null $skill_music
 * @property int|null $skill_crafting
 * @property int|null $skill_teaching
 * @property int|null $skill_working_with_children
 * @property int|null $skill_natural_sciences
 * @property int|null $skill_medical
 * @property int|null $skill_martial_arts
 * @property int|null $skill_yoga_pilates
 * @property string|null $skill_others
 * @property string|null $created
 * @property string|null $updated
 *
 * @property \App\Model\Entity\User $user
 */
class UserSkill extends Entity
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
        'description' => true,
        'hours' => true,
        'months' => true,
        'skill_blogging' => true,
        'skill_communication' => true,
        'skill_marketing' => true,
        'skill_systems' => true,
        'skill_web_development' => true,
        'skill_programming' => true,
        'skill_engineering' => true,
        'skill_accounting' => true,
        'skill_sales' => true,
        'skill_leadership' => true,
        'skill_teamwork' => true,
        'skill_coordination' => true,
        'skill_planning' => true,
        'skill_project_management' => true,
        'skill_negotiation' => true,
        'skill_networking' => true,
        'skill_entrepreneurship' => true,
        'skill_creativity' => true,
        'skill_designing' => true,
        'skill_photography' => true,
        'skill_film' => true,
        'skill_music' => true,
        'skill_crafting' => true,
        'skill_teaching' => true,
        'skill_working_with_children' => true,
        'skill_natural_sciences' => true,
        'skill_medical' => true,
        'skill_martial_arts' => true,
        'skill_yoga_pilates' => true,
        'skill_others' => true,
        'created' => true,
        'updated' => true,
        'user' => true,
    ];
}
