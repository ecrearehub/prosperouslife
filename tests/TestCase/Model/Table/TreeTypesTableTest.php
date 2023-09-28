<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TreeTypesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TreeTypesTable Test Case
 */
class TreeTypesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TreeTypesTable
     */
    protected $TreeTypes;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.TreeTypes',
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
        $config = $this->getTableLocator()->exists('TreeTypes') ? [] : ['className' => TreeTypesTable::class];
        $this->TreeTypes = $this->getTableLocator()->get('TreeTypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->TreeTypes);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\TreeTypesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
