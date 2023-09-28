<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TreeKindsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TreeKindsTable Test Case
 */
class TreeKindsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TreeKindsTable
     */
    protected $TreeKinds;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.TreeKinds',
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
        $config = $this->getTableLocator()->exists('TreeKinds') ? [] : ['className' => TreeKindsTable::class];
        $this->TreeKinds = $this->getTableLocator()->get('TreeKinds', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->TreeKinds);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\TreeKindsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
