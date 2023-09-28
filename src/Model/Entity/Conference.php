<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Conference Entity
 *
 * @property int $id
 * @property int|null $language_id
 * @property string|null $date
 * @property string|null $description
 * @property string|null $url
 * @property int|null $conference_timezone_id
 * @property int|null $counter
 * @property int|null $conference_type_id
 * @property int|null $conference_status_id
 * @property string|null $created
 * @property string|null $updated
 *
 * @property \App\Model\Entity\Language $language
 * @property \App\Model\Entity\ConferenceTimezone $conference_timezone
 * @property \App\Model\Entity\ConferenceType $conference_type
 * @property \App\Model\Entity\ConferenceStatus $conference_status
 */
class Conference extends Entity
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
        'language_id' => true,
        'date' => true,
        'description' => true,
        'url' => true,
        'conference_timezone_id' => true,
        'counter' => true,
        'conference_type_id' => true,
        'conference_status_id' => true,
        'created' => true,
        'updated' => true,
        'language' => true,
        'conference_timezone' => true,
        'conference_type' => true,
        'conference_status' => true,
    ];
}
