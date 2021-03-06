<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UsersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UsersTable Test Case
 */
class UsersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\UsersTable
     */
    public $Users;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.users',
        'app.event_series',
        'app.events',
        'app.categories',
        'app.event_series',
        'app.images',
        'app.events_images',
        'app.tags',
        'app.events_tags'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Users') ? [] : ['className' => UsersTable::class];
        $this->Users = TableRegistry::get('Users', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Users);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Tests UsersTable::setApiKey()
     *
     * @return void
     */
    public function testSetApiKey()
    {
        $userId = 2; // User without API key
        $user = $this->Users->get($userId);
        $this->assertNull($user->api_key);

        $this->Users->setApiKey($userId);
        $user = $this->Users->get($userId);
        $this->assertNotNull($user->api_key);
    }

    /**
     * Tests UsersTable::getApiKey()
     *
     * @return void
     */
    public function testGetApiKey()
    {
        $userId = 1;
        $user = $this->Users->get($userId);
        $this->assertNotNull($user->api_key);

        $apiKey = $this->Users->getApiKey($userId);
        $this->assertEquals($user->api_key, $apiKey);
    }
}
