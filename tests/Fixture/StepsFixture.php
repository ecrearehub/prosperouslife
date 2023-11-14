<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * StepsFixture
 */
class StepsFixture extends TestFixture
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
                'created' => '2023-10-22 19:10:29',
                'modified' => '2023-10-22 19:10:29',
            ],
        ];
        parent::init();
    }
}
