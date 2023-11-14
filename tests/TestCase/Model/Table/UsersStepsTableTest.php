<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UsersStepsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UsersStepsTable Test Case
 */
class UsersStepsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\UsersStepsTable
     */
    protected $UsersSteps;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.UsersSteps',
        'app.Users',
        'app.Steps',
        'app.UserStepStatuses',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('UsersSteps') ? [] : ['className' => UsersStepsTable::class];
        $this->UsersSteps = $this->getTableLocator()->get('UsersSteps', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->UsersSteps);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\UsersStepsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\UsersStepsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
