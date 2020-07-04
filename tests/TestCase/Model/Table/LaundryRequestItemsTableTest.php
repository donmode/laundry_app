<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LaundryRequestItemsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LaundryRequestItemsTable Test Case
 */
class LaundryRequestItemsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\LaundryRequestItemsTable
     */
    public $LaundryRequestItems;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.LaundryRequestItems',
        'app.LaundryRequests',
        'app.Items',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('LaundryRequestItems') ? [] : ['className' => LaundryRequestItemsTable::class];
        $this->LaundryRequestItems = TableRegistry::getTableLocator()->get('LaundryRequestItems', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->LaundryRequestItems);

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
