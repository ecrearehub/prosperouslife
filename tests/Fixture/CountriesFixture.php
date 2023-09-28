<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CountriesFixture
 */
class CountriesFixture extends TestFixture
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
                'name' => 'Lorem ipsum dolor sit amet',
                'flag' => 'Lorem ipsum dolor sit amet',
                'iso_code' => 'Lorem ipsum dolor sit amet',
                'phone_code' => 'Lorem ipsum dolor sit amet',
                'country_status_id' => 1,
            ],
        ];
        parent::init();
    }
}
