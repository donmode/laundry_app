<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LaundryRequestsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LaundryRequestsTable Test Case
 */
class LaundryRequestsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\LaundryRequestsTable
     */
    public $LaundryRequests;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.LaundryRequests',
        'app.Users',
        'app.Customers',
        'app.Payments',
        'app.LaundryRequestItems',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('LaundryRequests') ? [] : ['className' => LaundryRequestsTable::class];
        $this->LaundryRequests = TableRegistry::getTableLocator()->get('LaundryRequests', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->LaundryRequests);

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
}
