<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ConferencesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ConferencesTable Test Case
 */
class ConferencesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ConferencesTable
     */
    protected $Conferences;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Conferences',
        'app.Languages',
        'app.ConferenceTimezones',
        'app.ConferenceTypes',
        'app.ConferenceStatuses',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Conferences') ? [] : ['className' => ConferencesTable::class];
        $this->Conferences = $this->getTableLocator()->get('Conferences', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Conferences);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ConferencesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\ConferencesTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
