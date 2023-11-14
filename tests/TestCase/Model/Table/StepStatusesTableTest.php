<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\StepStatusesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\StepStatusesTable Test Case
 */
class StepStatusesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\StepStatusesTable
     */
    protected $StepStatuses;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.StepStatuses',
        'app.Users',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('StepStatuses') ? [] : ['className' => StepStatusesTable::class];
        $this->StepStatuses = $this->getTableLocator()->get('StepStatuses', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->StepStatuses);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\StepStatusesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
