<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UsersStepsFixture
 */
class UsersStepsFixture extends TestFixture
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
                'step_id' => 1,
                'user_step_status_id' => 1,
                'created' => '2023-10-22 18:39:10',
                'modified' => '2023-10-22 18:39:10',
            ],
        ];
        parent::init();
    }
}
