<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TreesFixture
 */
class TreesFixture extends TestFixture
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
                'tree_status_id' => 1,
                'tree_type_id' => 1,
                'tree_kind_id' => 1,
                'location' => 'Lorem ipsum dolor sit amet',
                'created' => 'Lorem ipsum dolor sit amet',
                'updated' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
