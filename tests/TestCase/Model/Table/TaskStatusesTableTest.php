<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TaskStatusesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TaskStatusesTable Test Case
 */
class TaskStatusesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TaskStatusesTable
     */
    protected $TaskStatuses;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.TaskStatuses',
        'app.Tasks',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('TaskStatuses') ? [] : ['className' => TaskStatusesTable::class];
        $this->TaskStatuses = $this->getTableLocator()->get('TaskStatuses', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->TaskStatuses);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\TaskStatusesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
