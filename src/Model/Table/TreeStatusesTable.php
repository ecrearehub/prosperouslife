<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TreeStatuses Model
 *
 * @property \App\Model\Table\TreesTable&\Cake\ORM\Association\HasMany $Trees
 *
 * @method \App\Model\Entity\TreeStatus newEmptyEntity()
 * @method \App\Model\Entity\TreeStatus newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\TreeStatus[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TreeStatus get($primaryKey, $options = [])
 * @method \App\Model\Entity\TreeStatus findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\TreeStatus patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TreeStatus[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\TreeStatus|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TreeStatus saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TreeStatus[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\TreeStatus[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\TreeStatus[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\TreeStatus[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class TreeStatusesTable extends Table
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

        $this->setTable('tree_statuses');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->hasMany('Trees', [
            'foreignKey' => 'tree_status_id',
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
