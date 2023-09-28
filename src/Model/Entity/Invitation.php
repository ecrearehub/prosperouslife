<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Invitation Entity
 *
 * @property int $id
 * @property int|null $user_id
 * @property string|null $first_name
 * @property string|null $last_name
 * @property string|null $email
 * @property string|null $subject
 * @property string|null $message
 * @property int|null $invitation_status_id
 * @property string|null $created
 * @property string|null $updated
 * @property string|null $recall
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\InvitationStatus $invitation_status
 */
class Invitation extends Entity
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
        'first_name' => true,
        'last_name' => true,
        'email' => true,
        'subject' => true,
        'message' => true,
        'invitation_status_id' => true,
        'created' => true,
        'updated' => true,
        'recall' => true,
        'user' => true,
        'invitation_status' => true,
    ];
}
