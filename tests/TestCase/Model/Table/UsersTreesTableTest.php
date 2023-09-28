<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UsersTreesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UsersTreesTable Test Case
 */
class UsersTreesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\UsersTreesTable
     */
    protected $UsersTrees;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.UsersTrees',
        'app.Users',
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
        $config = $this->getTableLocator()->exists('UsersTrees') ? [] : ['className' => UsersTreesTable::class];
        $this->UsersTrees = $this->getTableLocator()->get('UsersTrees', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->UsersTrees);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\UsersTreesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\UsersTreesTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
