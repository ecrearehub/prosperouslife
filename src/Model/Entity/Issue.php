<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Issue Entity
 *
 * @property int $id
 * @property int|null $operation_id
 * @property string|null $content
 * @property string|null $message
 * @property int|null $issue_status_id
 * @property string|null $created
 * @property string|null $updated
 *
 * @property \App\Model\Entity\Operation $operation
 * @property \App\Model\Entity\IssueStatus $issue_status
 */
class Issue extends Entity
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
        'operation_id' => true,
        'content' => true,
        'message' => true,
        'issue_status_id' => true,
        'created' => true,
        'updated' => true,
        'operation' => true,
        'issue_status' => true,
    ];
}
