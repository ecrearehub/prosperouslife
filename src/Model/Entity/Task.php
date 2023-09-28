<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Task Entity
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $start
 * @property string|null $stop
 * @property string|null $message
 * @property int|null $task_status_id
 * @property string|null $created
 * @property string|null $updated
 *
 * @property \App\Model\Entity\TaskStatus $task_status
 */
class Task extends Entity
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
        'start' => true,
        'stop' => true,
        'message' => true,
        'task_status_id' => true,
        'created' => true,
        'updated' => true,
        'task_status' => true,
    ];
}
