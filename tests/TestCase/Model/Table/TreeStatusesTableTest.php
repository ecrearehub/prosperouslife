<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TreeStatusesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TreeStatusesTable Test Case
 */
class TreeStatusesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TreeStatusesTable
     */
    protected $TreeStatuses;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.TreeStatuses',
        'app.Trees',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('TreeStatuses') ? [] : ['className' => TreeStatusesTable::class];
        $this->TreeStatuses = $this->getTableLocator()->get('TreeStatuses', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->TreeStatuses);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\TreeStatusesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
