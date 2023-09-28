<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DonationsOperationsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DonationsOperationsTable Test Case
 */
class DonationsOperationsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DonationsOperationsTable
     */
    protected $DonationsOperations;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.DonationsOperations',
        'app.Donations',
        'app.Operations',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('DonationsOperations') ? [] : ['className' => DonationsOperationsTable::class];
        $this->DonationsOperations = $this->getTableLocator()->get('DonationsOperations', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->DonationsOperations);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\DonationsOperationsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\DonationsOperationsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
