<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Project Entity
 *
 * @property int $id
 * @property int $user_id
 * @property int|null $goal_id
 * @property int|null $project_category_id
 * @property string|null $name
 * @property string|null $description
 * @property int|null $goal_meter
 * @property string|null $sourcecode
 * @property int|null $country_id
 * @property int|null $view
 * @property int|null $project_status_id
 * @property string|null $created
 * @property string|null $update
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Goal $goal
 * @property \App\Model\Entity\ProjectCategory $project_category
 * @property \App\Model\Entity\Country $country
 * @property \App\Model\Entity\ProjectStatus $project_status
 * @property \App\Model\Entity\Donation[] $donations
 * @property \App\Model\Entity\Favorite[] $favorites
 */
class Project extends Entity
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
        'goal_id' => true,
        'project_category_id' => true,
        'name' => true,
        'description' => true,
        'goal_meter' => true,
        'sourcecode' => true,
        'country_id' => true,
        'view' => true,
        'project_status_id' => true,
        'created' => true,
        'update' => true,
        'user' => true,
        'goal' => true,
        'project_category' => true,
        'country' => true,
        'project_status' => true,
        'donations' => true,
        'favorites' => true,
    ];
}
