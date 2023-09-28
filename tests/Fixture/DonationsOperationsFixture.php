<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DonationsOperationsFixture
 */
class DonationsOperationsFixture extends TestFixture
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
                'operation_id' => 1,
            ],
        ];
        parent::init();
    }
}
