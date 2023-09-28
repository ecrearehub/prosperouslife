<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SalesFixture
 */
class SalesFixture extends TestFixture
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
                'own' => 1.5,
                'downline' => 1.5,
                'total' => 1.5,
                'percent' => 1.5,
                'cp_own' => 1.5,
                'cp_downline' => 1.5,
                'cashback' => 1.5,
            ],
        ];
        parent::init();
    }
}
