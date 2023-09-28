<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OperationTypesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OperationTypesTable Test Case
 */
class OperationTypesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\OperationTypesTable
     */
    protected $OperationTypes;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.OperationTypes',
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
        $config = $this->getTableLocator()->exists('OperationTypes') ? [] : ['className' => OperationTypesTable::class];
        $this->OperationTypes = $this->getTableLocator()->get('OperationTypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->OperationTypes);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\OperationTypesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
