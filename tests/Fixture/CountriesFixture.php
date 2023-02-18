<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CountriesFixture
 */
class CountriesFixture extends TestFixture
{
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
                'nombre' => 'Lorem ipsum dolor sit amet',
                'name' => 'Lorem ipsum dolor sit amet',
                'nom' => 'Lorem ipsum dolor sit amet',
                'iso2' => 'Lorem ipsum dolor sit amet',
                'iso3' => 'Lorem ipsum dolor sit amet',
                'phone_code' => 'Lorem ip',
                'estado' => 'L',
            ],
        ];
        parent::init();
    }
}
