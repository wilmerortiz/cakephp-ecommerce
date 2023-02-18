<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * BillingAddressFixture
 */
class BillingAddressFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'billing_address';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'user_id' => 1,
                'address' => 'Lorem ipsum dolor sit amet',
                'country_id' => 1,
                'state' => 'Lorem ipsum dolor sit amet',
                'address_number' => 'Lor',
                'reference' => 'Lorem ipsum dolor sit amet',
                'status' => 1,
                'created' => 1676735474,
                'modified' => 1676735474,
            ],
        ];
        parent::init();
    }
}
