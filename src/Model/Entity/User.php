<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;
use Authentication\PasswordHasher\DefaultPasswordHasher;

/**
 * User Entity
 *
 * @property int $id
 * @property string|null $parent_id
 * @property string|null $username
 * @property string|null $password
 * @property string|null $email
 * @property string|null $first_name
 * @property string|null $last_name
 * @property string|null $birthday
 * @property int|null $user_role_id
 * @property int|null $user_status_id
 * @property string|null $skype
 * @property string|null $phone
 * @property string|null $mobile
 * @property string|null $address
 * @property string|null $zip
 * @property string|null $city
 * @property int|null $country_id
 * @property string|null $code
 * @property int|null $activation
 * @property int|null $terms
 * @property int|null $complete
 * @property string|null $last_login
 * @property int $newsletter
 * @property string|null $tax_id
 * @property string|null $vat_id
 * @property string|null $created
 * @property string|null $updated
 * @property int|null $lft
 * @property int|null $rght
 *
 * @property \App\Model\Entity\ParentUser $parent_user
 * @property \App\Model\Entity\UserRole $user_role
 * @property \App\Model\Entity\UserStatus $user_status
 * @property \App\Model\Entity\Country $country
 * @property \App\Model\Entity\Account[] $accounts
 * @property \App\Model\Entity\Donation[] $donations
 * @property \App\Model\Entity\Favorite[] $favorites
 * @property \App\Model\Entity\Invitation[] $invitations
 * @property \App\Model\Entity\Log[] $logs
 * @property \App\Model\Entity\Note[] $notes
 * @property \App\Model\Entity\Order[] $orders
 * @property \App\Model\Entity\Project[] $projects
 * @property \App\Model\Entity\Sale[] $sales
 * @property \App\Model\Entity\Transaction[] $transactions
 * @property \App\Model\Entity\UserPrivacySetting[] $user_privacy_settings
 * @property \App\Model\Entity\UserSkill[] $user_skills
 * @property \App\Model\Entity\ChildUser[] $child_users
 * @property \App\Model\Entity\Goal[] $goals
 * @property \App\Model\Entity\Language[] $languages
 * @property \App\Model\Entity\Tree[] $trees
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
        'email' => true,
        'first_name' => true,
        'last_name' => true,
        'birthday' => true,
        'user_role_id' => true,
        'user_status_id' => true,
        'skype' => true,
        'phone' => true,
        'mobile' => true,
        'address' => true,
        'zip' => true,
        'city' => true,
        'country_id' => true,
        'code' => true,
        'activation' => true,
        'terms' => true,
        'complete' => true,
        'last_login' => true,
        'newsletter' => true,
        'tax_id' => true,
        'vat_id' => true,
        'created' => true,
        'updated' => true,
        'lft' => true,
        'rght' => true,
        'parent_user' => true,
        'user_role' => true,
        'user_status' => true,
        'country' => true,
        'accounts' => true,
        'donations' => true,
        'favorites' => true,
        'invitations' => true,
        'logs' => true,
        'notes' => true,
        'orders' => true,
        'projects' => true,
        'sales' => true,
        'transactions' => true,
        'user_privacy_settings' => true,
        'user_skills' => true,
        'child_users' => true,
        'goals' => true,
        'languages' => true,
        'trees' => true,
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array<string>
     */
    protected $_hidden = [
        'password',
    ];

    // Automatically hash passwords when they are changed.
    protected function _setPassword(string $password)
    {
        $hasher = new DefaultPasswordHasher();
        return $hasher->hash($password);
    }
}
