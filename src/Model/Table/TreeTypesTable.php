<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TreeTypes Model
 *
 * @property \App\Model\Table\TreesTable&\Cake\ORM\Association\HasMany $Trees
 *
 * @method \App\Model\Entity\TreeType newEmptyEntity()
 * @method \App\Model\Entity\TreeType newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\TreeType[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TreeType get($primaryKey, $options = [])
 * @method \App\Model\Entity\TreeType findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\TreeType patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TreeType[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\TreeType|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TreeType saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TreeType[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\TreeType[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\TreeType[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\TreeType[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class TreeTypesTable extends Table
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

        $this->setTable('tree_types');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->hasMany('Trees', [
            'foreignKey' => 'tree_type_id',
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
