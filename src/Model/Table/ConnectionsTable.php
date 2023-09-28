<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Connections Model
 *
 * @property \App\Model\Table\DonationsConectionsTable&\Cake\ORM\Association\HasMany $DonationsConections
 * @property \App\Model\Table\OperationsTable&\Cake\ORM\Association\HasMany $Operations
 *
 * @method \App\Model\Entity\Connection newEmptyEntity()
 * @method \App\Model\Entity\Connection newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Connection[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Connection get($primaryKey, $options = [])
 * @method \App\Model\Entity\Connection findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Connection patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Connection[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Connection|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Connection saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Connection[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Connection[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Connection[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Connection[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ConnectionsTable extends Table
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

        $this->setTable('connections');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->hasMany('DonationsConections', [
            'foreignKey' => 'connection_id',
        ]);
        $this->hasMany('Operations', [
            'foreignKey' => 'connection_id',
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
