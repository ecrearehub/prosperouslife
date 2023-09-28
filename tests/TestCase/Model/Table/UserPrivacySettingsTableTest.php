<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UserPrivacySettingsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UserPrivacySettingsTable Test Case
 */
class UserPrivacySettingsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\UserPrivacySettingsTable
     */
    protected $UserPrivacySettings;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.UserPrivacySettings',
        'app.Users',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('UserPrivacySettings') ? [] : ['className' => UserPrivacySettingsTable::class];
        $this->UserPrivacySettings = $this->getTableLocator()->get('UserPrivacySettings', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->UserPrivacySettings);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\UserPrivacySettingsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\UserPrivacySettingsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
