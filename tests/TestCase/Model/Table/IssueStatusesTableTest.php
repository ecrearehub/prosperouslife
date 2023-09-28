<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\IssueStatusesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\IssueStatusesTable Test Case
 */
class IssueStatusesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\IssueStatusesTable
     */
    protected $IssueStatuses;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.IssueStatuses',
        'app.Issues',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('IssueStatuses') ? [] : ['className' => IssueStatusesTable::class];
        $this->IssueStatuses = $this->getTableLocator()->get('IssueStatuses', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->IssueStatuses);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\IssueStatusesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
