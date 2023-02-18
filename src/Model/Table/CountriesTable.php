<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Countries Model
 *
 * @property \App\Model\Table\BillingAddressTable&\Cake\ORM\Association\HasMany $BillingAddress
 * @property \App\Model\Table\ShippingAddressTable&\Cake\ORM\Association\HasMany $ShippingAddress
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\HasMany $Users
 *
 * @method \App\Model\Entity\Country newEmptyEntity()
 * @method \App\Model\Entity\Country newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Country[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Country get($primaryKey, $options = [])
 * @method \App\Model\Entity\Country findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Country patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Country[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Country|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Country saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Country[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Country[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Country[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Country[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class CountriesTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('countries');
        $this->setDisplayField('nombre');
        $this->setPrimaryKey('id');

        $this->hasMany('BillingAddress', [
            'foreignKey' => 'country_id',
        ]);
        $this->hasMany('ShippingAddress', [
            'foreignKey' => 'country_id',
        ]);
        $this->hasMany('Users', [
            'foreignKey' => 'country_id',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('nombre')
            ->maxLength('nombre', 100)
            ->allowEmptyString('nombre');

        $validator
            ->scalar('name')
            ->maxLength('name', 100)
            ->allowEmptyString('name');

        $validator
            ->scalar('nom')
            ->maxLength('nom', 100)
            ->allowEmptyString('nom');

        $validator
            ->scalar('iso2')
            ->maxLength('iso2', 100)
            ->allowEmptyString('iso2');

        $validator
            ->scalar('iso3')
            ->maxLength('iso3', 100)
            ->allowEmptyString('iso3');

        $validator
            ->scalar('phone_code')
            ->maxLength('phone_code', 10)
            ->allowEmptyString('phone_code');

        $validator
            ->scalar('estado')
            ->maxLength('estado', 1)
            ->allowEmptyString('estado');

        return $validator;
    }
}
