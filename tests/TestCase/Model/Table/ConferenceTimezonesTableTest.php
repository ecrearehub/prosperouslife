<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ConferenceTimezonesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ConferenceTimezonesTable Test Case
 */
class ConferenceTimezonesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ConferenceTimezonesTable
     */
    protected $ConferenceTimezones;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.ConferenceTimezones',
        'app.Conferences',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('ConferenceTimezones') ? [] : ['className' => ConferenceTimezonesTable::class];
        $this->ConferenceTimezones = $this->getTableLocator()->get('ConferenceTimezones', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->ConferenceTimezones);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ConferenceTimezonesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
