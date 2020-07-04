<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PaymentOptionsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PaymentOptionsTable Test Case
 */
class PaymentOptionsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PaymentOptionsTable
     */
    public $PaymentOptions;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.PaymentOptions',
        'app.Payments',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('PaymentOptions') ? [] : ['className' => PaymentOptionsTable::class];
        $this->PaymentOptions = TableRegistry::getTableLocator()->get('PaymentOptions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PaymentOptions);

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
}
