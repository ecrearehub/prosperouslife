<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Authentication\PasswordHasher\DefaultPasswordHasher;
use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property int|null $parent_id
 * @property string|null $username
 * @property string|null $password
 * @property string|null $first_name
 * @property string|null $last_name
 * @property int|null $user_role_id
 * @property int|null $user_status_id
 * @property int|null $step_id
 * @property int|null $step_status_id
 * @property \Cake\I18n\FrozenDate|null $birthday
 * @property int|null $language_id
 * @property int|null $country_id
 * @property string|null $address
 * @property string|null $zip
 * @property string|null $city
 * @property string|null $phone
 * @property string|null $mobile
 * @property string|null $email
 * @property string|null $telegram
 * @property string $code
 * @property int $activated
 * @property int $terms
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property int $lft
 * @property int $rght
 *
 * @property \App\Model\Entity\ParentUser $parent_user
 * @property \App\Model\Entity\UserRole $user_role
 * @property \App\Model\Entity\UserStatus $user_status
 * @property \App\Model\Entity\Step $step
 * @property \App\Model\Entity\StepStatus $step_status
 * @property \App\Model\Entity\Language $language
 * @property \App\Model\Entity\Country $country
 * @property \App\Model\Entity\Account[] $accounts
 * @property \App\Model\Entity\Click[] $clicks
 * @property \App\Model\Entity\Downline[] $downline
 * @property \App\Model\Entity\Invitation[] $invitations
 * @property \App\Model\Entity\Log[] $logs
 * @property \App\Model\Entity\Matrix[] $matrices
 * @property \App\Model\Entity\Message[] $messages
 * @property \App\Model\Entity\Note[] $notes
 * @property \App\Model\Entity\Notification[] $notifications
 * @property \App\Model\Entity\Order[] $orders
 * @property \App\Model\Entity\ProjectStatistic[] $project_statistics
 * @property \App\Model\Entity\Referral[] $referrals
 * @property \App\Model\Entity\Sale[] $sales
 * @property \App\Model\Entity\Ticket[] $tickets
 * @property \App\Model\Entity\Transaction[] $transactions
 * @property \App\Model\Entity\Unlock[] $unlocks
 * @property \App\Model\Entity\ChildUser[] $child_users
 * @property \App\Model\Entity\Verification[] $verifications
 */
class User extends Entity
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
        'parent_id' => true,
        'username' => true,
        'password' => true,
        'first_name' => true,
        'last_name' => true,
        'user_role_id' => true,
        'user_status_id' => true,
        'step_id' => true,
        'step_status_id' => true,
        'birthday' => true,
        'language_id' => true,
        'country_id' => true,
        'address' => true,
        'zip' => true,
        'city' => true,
        'phone' => true,
        'mobile' => true,
        'email' => true,
        'telegram' => true,
        'code' => true,
        'activated' => true,
        'terms' => true,
        'created' => true,
        'modified' => true,
        'lft' => true,
        'rght' => true,
        'parent_user' => true,
        'user_role' => true,
        'user_status' => true,
        'step' => true,
        'step_status' => true,
        'language' => true,
        'country' => true,
        'accounts' => true,
        'clicks' => true,
        'downline' => true,
        'invitations' => true,
        'logs' => true,
        'matrices' => true,
        'messages' => true,
        'notes' => true,
        'notifications' => true,
        'orders' => true,
        'project_statistics' => true,
        'referrals' => true,
        'sales' => true,
        'tickets' => true,
        'transactions' => true,
        'unlocks' => true,
        'child_users' => true,
        'verifications' => true,
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array<string>
     */
    protected $_hidden = [
        'password',
    ];

    protected function _setPassword(string $password): ?string
    {
        if (strlen($password) > 0) {
            return (new DefaultPasswordHasher())->hash($password);
        }
    }
}
