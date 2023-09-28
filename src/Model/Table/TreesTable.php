<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Trees Model
 *
 * @property \App\Model\Table\TreeStatusesTable&\Cake\ORM\Association\BelongsTo $TreeStatuses
 * @property \App\Model\Table\TreeTypesTable&\Cake\ORM\Association\BelongsTo $TreeTypes
 * @property \App\Model\Table\TreeKindsTable&\Cake\ORM\Association\BelongsTo $TreeKinds
 * @property \App\Model\Table\OrdersTable&\Cake\ORM\Association\BelongsToMany $Orders
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsToMany $Users
 *
 * @method \App\Model\Entity\Tree newEmptyEntity()
 * @method \App\Model\Entity\Tree newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Tree[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Tree get($primaryKey, $options = [])
 * @method \App\Model\Entity\Tree findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Tree patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Tree[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Tree|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Tree saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Tree[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Tree[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Tree[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Tree[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class TreesTable extends Table
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

        $this->setTable('trees');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('TreeStatuses', [
            'foreignKey' => 'tree_status_id',
        ]);
        $this->belongsTo('TreeTypes', [
            'foreignKey' => 'tree_type_id',
        ]);
        $this->belongsTo('TreeKinds', [
            'foreignKey' => 'tree_kind_id',
        ]);
        $this->belongsToMany('Orders', [
            'foreignKey' => 'tree_id',
            'targetForeignKey' => 'order_id',
            'joinTable' => 'orders_trees',
        ]);
        $this->belongsToMany('Users', [
            'foreignKey' => 'tree_id',
            'targetForeignKey' => 'user_id',
            'joinTable' => 'users_trees',
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
            ->integer('tree_status_id')
            ->allowEmptyString('tree_status_id');

        $validator
            ->integer('tree_type_id')
            ->allowEmptyString('tree_type_id');

        $validator
            ->integer('tree_kind_id')
            ->allowEmptyString('tree_kind_id');

        $validator
            ->scalar('location')
            ->maxLength('location', 45)
            ->allowEmptyString('location');

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
        $rules->add($rules->existsIn('tree_status_id', 'TreeStatuses'), ['errorField' => 'tree_status_id']);
        $rules->add($rules->existsIn('tree_type_id', 'TreeTypes'), ['errorField' => 'tree_type_id']);
        $rules->add($rules->existsIn('tree_kind_id', 'TreeKinds'), ['errorField' => 'tree_kind_id']);

        return $rules;
    }
}
