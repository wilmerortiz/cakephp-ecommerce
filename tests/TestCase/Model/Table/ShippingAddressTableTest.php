<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ShippingAddressTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ShippingAddressTable Test Case
 */
class ShippingAddressTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ShippingAddressTable
     */
    protected $ShippingAddress;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.ShippingAddress',
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
        $config = $this->getTableLocator()->exists('ShippingAddress') ? [] : ['className' => ShippingAddressTable::class];
        $this->ShippingAddress = $this->getTableLocator()->get('ShippingAddress', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->ShippingAddress);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ShippingAddressTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\ShippingAddressTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
