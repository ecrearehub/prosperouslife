<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UserPrivacySettingsFixture
 */
class UserPrivacySettingsFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'user_id' => 1,
                'birthday' => 1,
                'goals' => 1,
                'skills' => 1,
                'projects' => 1,
                'legasy' => 1,
                'trees' => 1,
                'email' => 1,
                'phone' => 1,
                'mobile' => 1,
                'created' => 'Lorem ipsum dolor sit amet',
                'updated' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
