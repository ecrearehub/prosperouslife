<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ConferencesFixture
 */
class ConferencesFixture extends TestFixture
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
                'language_id' => 1,
                'date' => 'Lorem ipsum dolor sit amet',
                'description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'url' => 'Lorem ipsum dolor sit amet',
                'conference_timezone_id' => 1,
                'counter' => 1,
                'conference_type_id' => 1,
                'conference_status_id' => 1,
                'created' => 'Lorem ipsum dolor sit amet',
                'updated' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
