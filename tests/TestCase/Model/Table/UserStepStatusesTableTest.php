<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UserStepStatusesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UserStepStatusesTable Test Case
 */
class UserStepStatusesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\UserStepStatusesTable
     */
    protected $UserStepStatuses;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.UserStepStatuses',
        'app.UsersSteps',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('UserStepStatuses') ? [] : ['className' => UserStepStatusesTable::class];
        $this->UserStepStatuses = $this->getTableLocator()->get('UserStepStatuses', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->UserStepStatuses);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\UserStepStatusesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
