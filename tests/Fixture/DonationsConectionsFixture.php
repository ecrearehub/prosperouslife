<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DonationsConectionsFixture
 */
class DonationsConectionsFixture extends TestFixture
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
                'donation_id' => 1,
                'connection_id' => 1,
                'sourceid' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
