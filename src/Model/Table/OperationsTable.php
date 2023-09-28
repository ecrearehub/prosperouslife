<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Operations Model
 *
 * @property \App\Model\Table\ConnectionsTable&\Cake\ORM\Association\BelongsTo $Connections
 * @property \App\Model\Table\OperationStatusesTable&\Cake\ORM\Association\BelongsTo $OperationStatuses
 * @property \App\Model\Table\OperationTypesTable&\Cake\ORM\Association\BelongsTo $OperationTypes
 * @property \App\Model\Table\IssuesTable&\Cake\ORM\Association\HasMany $Issues
 * @property \App\Model\Table\DonationsTable&\Cake\ORM\Association\BelongsToMany $Donations
 *
 * @method \App\Model\Entity\Operation newEmptyEntity()
 * @method \App\Model\Entity\Operation newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Operation[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Operation get($primaryKey, $options = [])
 * @method \App\Model\Entity\Operation findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Operation patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Operation[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Operation|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Operation saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Operation[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Operation[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Operation[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Operation[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class OperationsTable extends Table
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

        $this->setTable('operations');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Connections', [
            'foreignKey' => 'connection_id',
        ]);
        $this->belongsTo('OperationStatuses', [
            'foreignKey' => 'operation_status_id',
        ]);
        $this->belongsTo('OperationTypes', [
            'foreignKey' => 'operation_type_id',
        ]);
        $this->hasMany('Issues', [
            'foreignKey' => 'operation_id',
        ]);
        $this->belongsToMany('Donations', [
            'foreignKey' => 'operation_id',
            'targetForeignKey' => 'donation_id',
            'joinTable' => 'donations_operations',
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
            ->integer('connection_id')
            ->allowEmptyString('connection_id');

        $validator
            ->scalar('sourceid')
            ->maxLength('sourceid', 45)
            ->allowEmptyString('sourceid');

        $validator
            ->scalar('content')
            ->maxLength('content', 45)
            ->allowEmptyString('content');

        $validator
            ->integer('operation_status_id')
            ->allowEmptyString('operation_status_id');

        $validator
            ->integer('operation_type_id')
            ->allowEmptyString('operation_type_id');

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
        $rules->add($rules->existsIn('connection_id', 'Connections'), ['errorField' => 'connection_id']);
        $rules->add($rules->existsIn('operation_status_id', 'OperationStatuses'), ['errorField' => 'operation_status_id']);
        $rules->add($rules->existsIn('operation_type_id', 'OperationTypes'), ['errorField' => 'operation_type_id']);

        return $rules;
    }
}
