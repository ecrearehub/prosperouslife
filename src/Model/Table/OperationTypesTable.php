<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * OperationTypes Model
 *
 * @property \App\Model\Table\OperationsTable&\Cake\ORM\Association\HasMany $Operations
 *
 * @method \App\Model\Entity\OperationType newEmptyEntity()
 * @method \App\Model\Entity\OperationType newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\OperationType[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\OperationType get($primaryKey, $options = [])
 * @method \App\Model\Entity\OperationType findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\OperationType patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\OperationType[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\OperationType|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\OperationType saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\OperationType[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\OperationType[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\OperationType[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\OperationType[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class OperationTypesTable extends Table
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

        $this->setTable('operation_types');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->hasMany('Operations', [
            'foreignKey' => 'operation_type_id',
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
            ->scalar('name')
            ->maxLength('name', 45)
            ->allowEmptyString('name');

        return $validator;
    }
}
