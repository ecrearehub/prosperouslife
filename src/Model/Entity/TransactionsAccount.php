<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * TransactionsAccount Entity
 *
 * @property int $id
 * @property int|null $transaction_id
 * @property int|null $account_id
 *
 * @property \App\Model\Entity\Transaction $transaction
 * @property \App\Model\Entity\Account $account
 */
class TransactionsAccount extends Entity
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
        'transaction_id' => true,
        'account_id' => true,
        'transaction' => true,
        'account' => true,
    ];
}
