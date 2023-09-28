<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Transaction Entity
 *
 * @property int $id
 * @property int|null $user_id
 * @property string|null $description
 * @property string|null $comment
 * @property string|null $amount
 * @property int|null $transaction_type_id
 * @property int|null $transaction_status_id
 * @property string|null $created
 * @property string|null $updated
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\TransactionType $transaction_type
 * @property \App\Model\Entity\TransactionStatus $transaction_status
 * @property \App\Model\Entity\Account[] $accounts
 */
class Transaction extends Entity
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
        'comment' => true,
        'amount' => true,
        'transaction_type_id' => true,
        'transaction_status_id' => true,
        'created' => true,
        'updated' => true,
        'user' => true,
        'transaction_type' => true,
        'transaction_status' => true,
        'accounts' => true,
    ];
}
