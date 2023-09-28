<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LanguageStatusesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LanguageStatusesTable Test Case
 */
class LanguageStatusesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\LanguageStatusesTable
     */
    protected $LanguageStatuses;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.LanguageStatuses',
        'app.Languages',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('LanguageStatuses') ? [] : ['className' => LanguageStatusesTable::class];
        $this->LanguageStatuses = $this->getTableLocator()->get('LanguageStatuses', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->LanguageStatuses);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\LanguageStatusesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
