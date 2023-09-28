<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Account Entity
 *
 * @property int $id
 * @property int|null $user_id
 * @property string|null $account_holder
 * @property string|null $account
 * @property string|null $iban
 * @property string|null $bic_swift
 * @property string|null $bank_name
 * @property string|null $address
 * @property int|null $account_status_id
 * @property int|null $account_type_id
 * @property string|null $created
 * @property string|null $updated
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\AccountStatus $account_status
 * @property \App\Model\Entity\AccountType $account_type
 * @property \App\Model\Entity\Transaction[] $transactions
 */
class Account extends Entity
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
        'account_holder' => true,
        'account' => true,
        'iban' => true,
        'bic_swift' => true,
        'bank_name' => true,
        'address' => true,
        'account_status_id' => true,
        'account_type_id' => true,
        'created' => true,
        'updated' => true,
        'user' => true,
        'account_status' => true,
        'account_type' => true,
        'transactions' => true,
    ];
}
