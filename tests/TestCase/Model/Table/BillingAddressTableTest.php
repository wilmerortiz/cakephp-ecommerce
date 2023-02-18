<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BillingAddressTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BillingAddressTable Test Case
 */
class BillingAddressTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\BillingAddressTable
     */
    protected $BillingAddress;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.BillingAddress',
        'app.Users',
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
        $config = $this->getTableLocator()->exists('BillingAddress') ? [] : ['className' => BillingAddressTable::class];
        $this->BillingAddress = $this->getTableLocator()->get('BillingAddress', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->BillingAddress);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\BillingAddressTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\BillingAddressTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
