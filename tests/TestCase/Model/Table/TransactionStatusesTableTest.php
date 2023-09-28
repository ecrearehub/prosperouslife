<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TransactionStatusesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TransactionStatusesTable Test Case
 */
class TransactionStatusesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TransactionStatusesTable
     */
    protected $TransactionStatuses;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.TransactionStatuses',
        'app.Transactions',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('TransactionStatuses') ? [] : ['className' => TransactionStatusesTable::class];
        $this->TransactionStatuses = $this->getTableLocator()->get('TransactionStatuses', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->TransactionStatuses);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\TransactionStatusesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
