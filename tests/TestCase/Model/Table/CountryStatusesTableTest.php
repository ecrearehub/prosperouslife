<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CountryStatusesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CountryStatusesTable Test Case
 */
class CountryStatusesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CountryStatusesTable
     */
    protected $CountryStatuses;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.CountryStatuses',
        'app.Countries',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('CountryStatuses') ? [] : ['className' => CountryStatusesTable::class];
        $this->CountryStatuses = $this->getTableLocator()->get('CountryStatuses', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->CountryStatuses);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\CountryStatusesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
