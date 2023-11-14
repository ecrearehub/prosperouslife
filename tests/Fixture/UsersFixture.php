<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UsersFixture
 */
class UsersFixture extends TestFixture
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
                'parent_id' => 1,
                'username' => 'Lorem ipsum dolor sit amet',
                'password' => 'Lorem ipsum dolor sit amet',
                'first_name' => 'Lorem ipsum dolor sit amet',
                'last_name' => 'Lorem ipsum dolor sit amet',
                'user_role_id' => 1,
                'user_status_id' => 1,
                'step_id' => 1,
                'step_status_id' => 1,
                'birthday' => '2023-10-22',
                'language_id' => 1,
                'country_id' => 1,
                'address' => 'Lorem ipsum dolor sit amet',
                'zip' => 'Lorem ipsum dolor sit amet',
                'city' => 'Lorem ipsum dolor sit amet',
                'phone' => 'Lorem ipsum dolor sit amet',
                'mobile' => 'Lorem ipsum dolor sit amet',
                'email' => 'Lorem ipsum dolor sit amet',
                'code' => 'Lorem ipsum dolor sit amet',
                'activated' => 1,
                'terms' => 1,
                'created' => '2023-10-22 19:10:57',
                'modified' => '2023-10-22 19:10:57',
                'lft' => 1,
                'rght' => 1,
            ],
        ];
        parent::init();
    }
}
