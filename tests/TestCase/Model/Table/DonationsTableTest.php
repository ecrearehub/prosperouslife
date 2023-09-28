<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DonationsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DonationsTable Test Case
 */
class DonationsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DonationsTable
     */
    protected $Donations;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Donations',
        'app.Users',
        'app.Projects',
        'app.DonationStatuses',
        'app.DonationsConections',
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
        $config = $this->getTableLocator()->exists('Donations') ? [] : ['className' => DonationsTable::class];
        $this->Donations = $this->getTableLocator()->get('Donations', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Donations);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\DonationsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\DonationsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
