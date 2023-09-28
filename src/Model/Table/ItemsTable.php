<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Items Model
 *
 * @property \App\Model\Table\ItemCategoriesTable&\Cake\ORM\Association\BelongsTo $ItemCategories
 * @property \App\Model\Table\ItemStatusesTable&\Cake\ORM\Association\BelongsTo $ItemStatuses
 * @property \App\Model\Table\ItemTypesTable&\Cake\ORM\Association\BelongsTo $ItemTypes
 * @property \App\Model\Table\OrdersTable&\Cake\ORM\Association\BelongsToMany $Orders
 *
 * @method \App\Model\Entity\Item newEmptyEntity()
 * @method \App\Model\Entity\Item newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Item[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Item get($primaryKey, $options = [])
 * @method \App\Model\Entity\Item findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Item patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Item[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Item|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Item saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Item[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Item[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Item[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Item[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ItemsTable extends Table
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

        $this->setTable('items');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('ItemCategories', [
            'foreignKey' => 'item_category_id',
        ]);
        $this->belongsTo('ItemStatuses', [
            'foreignKey' => 'item_status_id',
        ]);
        $this->belongsTo('ItemTypes', [
            'foreignKey' => 'item_type_id',
        ]);
        $this->belongsToMany('Orders', [
            'foreignKey' => 'item_id',
            'targetForeignKey' => 'order_id',
            'joinTable' => 'orders_items',
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
            ->integer('item_category_id')
            ->allowEmptyString('item_category_id');

        $validator
            ->scalar('name')
            ->maxLength('name', 45)
            ->allowEmptyString('name');

        $validator
            ->scalar('short_description')
            ->allowEmptyString('short_description');

        $validator
            ->scalar('description')
            ->allowEmptyString('description');

        $validator
            ->decimal('price')
            ->allowEmptyString('price');

        $validator
            ->decimal('tax')
            ->allowEmptyString('tax');

        $validator
            ->integer('parts')
            ->allowEmptyString('parts');

        $validator
            ->integer('item_status_id')
            ->allowEmptyString('item_status_id');

        $validator
            ->integer('item_type_id')
            ->allowEmptyString('item_type_id');

        $validator
            ->scalar('sourcecode')
            ->maxLength('sourcecode', 255)
            ->requirePresence('sourcecode', 'create')
            ->notEmptyString('sourcecode');

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
        $rules->add($rules->existsIn('item_category_id', 'ItemCategories'), ['errorField' => 'item_category_id']);
        $rules->add($rules->existsIn('item_status_id', 'ItemStatuses'), ['errorField' => 'item_status_id']);
        $rules->add($rules->existsIn('item_type_id', 'ItemTypes'), ['errorField' => 'item_type_id']);

        return $rules;
    }
}
