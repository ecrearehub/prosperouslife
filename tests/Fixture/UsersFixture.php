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
                'parent_id' => 'Lorem ipsum dolor sit amet',
                'username' => 'Lorem ipsum dolor sit amet',
                'password' => 'Lorem ipsum dolor sit amet',
                'email' => 'Lorem ipsum dolor sit amet',
                'first_name' => 'Lorem ipsum dolor sit amet',
                'last_name' => 'Lorem ipsum dolor sit amet',
                'birthday' => 'Lorem ipsum dolor sit amet',
                'user_role_id' => 1,
                'user_status_id' => 1,
                'skype' => 'Lorem ipsum dolor sit amet',
                'phone' => 'Lorem ipsum dolor sit amet',
                'mobile' => 'Lorem ipsum dolor sit amet',
                'address' => 'Lorem ipsum dolor sit amet',
                'zip' => 'Lorem ipsum dolor sit amet',
                'city' => 'Lorem ipsum dolor sit amet',
                'country_id' => 1,
                'code' => 'Lorem ipsum dolor sit amet',
                'activation' => 1,
                'terms' => 1,
                'complete' => 1,
                'last_login' => 'Lorem ipsum dolor sit amet',
                'newsletter' => 1,
                'tax_id' => 'Lorem ipsum dolor sit amet',
                'vat_id' => 'Lorem ipsum dolor sit amet',
                'created' => 'Lorem ipsum dolor sit amet',
                'updated' => 'Lorem ipsum dolor sit amet',
                'lft' => 1,
                'rght' => 1,
            ],
        ];
        parent::init();
    }
}
