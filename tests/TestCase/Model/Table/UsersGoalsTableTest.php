<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UsersGoalsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UsersGoalsTable Test Case
 */
class UsersGoalsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\UsersGoalsTable
     */
    protected $UsersGoals;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.UsersGoals',
        'app.Users',
        'app.Goals',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('UsersGoals') ? [] : ['className' => UsersGoalsTable::class];
        $this->UsersGoals = $this->getTableLocator()->get('UsersGoals', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->UsersGoals);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\UsersGoalsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\UsersGoalsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
