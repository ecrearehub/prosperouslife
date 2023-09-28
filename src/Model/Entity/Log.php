<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Log Entity
 *
 * @property int $id
 * @property int|null $user_id
 * @property string|null $created
 * @property string|null $access_ip
 * @property string|null $controller
 * @property string|null $action
 * @property string|null $description
 *
 * @property \App\Model\Entity\User $user
 */
class Log extends Entity
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
        'created' => true,
        'access_ip' => true,
        'controller' => true,
        'action' => true,
        'description' => true,
        'user' => true,
    ];
}
