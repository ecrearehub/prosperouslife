<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * News Entity
 *
 * @property int $id
 * @property string|null $subject
 * @property string|null $text
 * @property int|null $reader
 * @property int|null $view
 * @property int|null $news_status_id
 * @property int|null $language_id
 * @property string|null $created
 * @property string|null $updated
 *
 * @property \App\Model\Entity\NewsStatus $news_status
 * @property \App\Model\Entity\Language $language
 */
class News extends Entity
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
        'subject' => true,
        'text' => true,
        'reader' => true,
        'view' => true,
        'news_status_id' => true,
        'language_id' => true,
        'created' => true,
        'updated' => true,
        'news_status' => true,
        'language' => true,
    ];
}
