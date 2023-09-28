<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ProjectCategory Entity
 *
 * @property int $id
 * @property string|null $name
 * @property string $comment
 * @property string $description
 * @property string $url
 * @property int|null $sort
 * @property int|null $counter
 * @property string|null $created
 * @property string|null $updated
 *
 * @property \App\Model\Entity\Project[] $projects
 */
class ProjectCategory extends Entity
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
        'comment' => true,
        'description' => true,
        'url' => true,
        'sort' => true,
        'counter' => true,
        'created' => true,
        'updated' => true,
        'projects' => true,
    ];
}
