<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Operation Entity
 *
 * @property int $id
 * @property int|null $connection_id
 * @property string|null $sourceid
 * @property string|null $content
 * @property int|null $operation_status_id
 * @property int|null $operation_type_id
 * @property string|null $created
 * @property string|null $updated
 *
 * @property \App\Model\Entity\Connection $connection
 * @property \App\Model\Entity\OperationStatus $operation_status
 * @property \App\Model\Entity\OperationType $operation_type
 * @property \App\Model\Entity\Issue[] $issues
 * @property \App\Model\Entity\Donation[] $donations
 */
class Operation extends Entity
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
        'connection_id' => true,
        'sourceid' => true,
        'content' => true,
        'operation_status_id' => true,
        'operation_type_id' => true,
        'created' => true,
        'updated' => true,
        'connection' => true,
        'operation_status' => true,
        'operation_type' => true,
        'issues' => true,
        'donations' => true,
    ];
}
