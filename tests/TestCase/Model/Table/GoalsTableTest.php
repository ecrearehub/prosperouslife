<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GoalsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GoalsTable Test Case
 */
class GoalsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\GoalsTable
     */
    protected $Goals;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Goals',
        'app.Projects',
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
        $config = $this->getTableLocator()->exists('Goals') ? [] : ['className' => GoalsTable::class];
        $this->Goals = $this->getTableLocator()->get('Goals', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Goals);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\GoalsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
