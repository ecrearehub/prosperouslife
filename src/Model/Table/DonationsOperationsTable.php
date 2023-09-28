<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DonationsOperations Model
 *
 * @property \App\Model\Table\DonationsTable&\Cake\ORM\Association\BelongsTo $Donations
 * @property \App\Model\Table\OperationsTable&\Cake\ORM\Association\BelongsTo $Operations
 *
 * @method \App\Model\Entity\DonationsOperation newEmptyEntity()
 * @method \App\Model\Entity\DonationsOperation newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\DonationsOperation[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\DonationsOperation get($primaryKey, $options = [])
 * @method \App\Model\Entity\DonationsOperation findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\DonationsOperation patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\DonationsOperation[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\DonationsOperation|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DonationsOperation saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DonationsOperation[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\DonationsOperation[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\DonationsOperation[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\DonationsOperation[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class DonationsOperationsTable extends Table
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

        $this->setTable('donations_operations');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Donations', [
            'foreignKey' => 'donation_id',
        ]);
        $this->belongsTo('Operations', [
            'foreignKey' => 'operation_id',
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
            ->integer('donation_id')
            ->allowEmptyString('donation_id');

        $validator
            ->integer('operation_id')
            ->allowEmptyString('operation_id');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn('donation_id', 'Donations'), ['errorField' => 'donation_id']);
        $rules->add($rules->existsIn('operation_id', 'Operations'), ['errorField' => 'operation_id']);

        return $rules;
    }
}
