<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\NewsStatusesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\NewsStatusesTable Test Case
 */
class NewsStatusesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\NewsStatusesTable
     */
    protected $NewsStatuses;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.NewsStatuses',
        'app.News',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('NewsStatuses') ? [] : ['className' => NewsStatusesTable::class];
        $this->NewsStatuses = $this->getTableLocator()->get('NewsStatuses', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->NewsStatuses);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\NewsStatusesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
