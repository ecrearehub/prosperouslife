<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Conferences Model
 *
 * @property \App\Model\Table\LanguagesTable&\Cake\ORM\Association\BelongsTo $Languages
 * @property \App\Model\Table\ConferenceTimezonesTable&\Cake\ORM\Association\BelongsTo $ConferenceTimezones
 * @property \App\Model\Table\ConferenceTypesTable&\Cake\ORM\Association\BelongsTo $ConferenceTypes
 * @property \App\Model\Table\ConferenceStatusesTable&\Cake\ORM\Association\BelongsTo $ConferenceStatuses
 *
 * @method \App\Model\Entity\Conference newEmptyEntity()
 * @method \App\Model\Entity\Conference newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Conference[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Conference get($primaryKey, $options = [])
 * @method \App\Model\Entity\Conference findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Conference patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Conference[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Conference|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Conference saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Conference[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Conference[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Conference[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Conference[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ConferencesTable extends Table
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

        $this->setTable('conferences');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Languages', [
            'foreignKey' => 'language_id',
        ]);
        $this->belongsTo('ConferenceTimezones', [
            'foreignKey' => 'conference_timezone_id',
        ]);
        $this->belongsTo('ConferenceTypes', [
            'foreignKey' => 'conference_type_id',
        ]);
        $this->belongsTo('ConferenceStatuses', [
            'foreignKey' => 'conference_status_id',
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
            ->integer('language_id')
            ->allowEmptyString('language_id');

        $validator
            ->scalar('date')
            ->maxLength('date', 45)
            ->allowEmptyString('date');

        $validator
            ->scalar('description')
            ->allowEmptyString('description');

        $validator
            ->scalar('url')
            ->maxLength('url', 255)
            ->allowEmptyString('url');

        $validator
            ->integer('conference_timezone_id')
            ->allowEmptyString('conference_timezone_id');

        $validator
            ->integer('counter')
            ->allowEmptyString('counter');

        $validator
            ->integer('conference_type_id')
            ->allowEmptyString('conference_type_id');

        $validator
            ->integer('conference_status_id')
            ->allowEmptyString('conference_status_id');

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
        $rules->add($rules->existsIn('language_id', 'Languages'), ['errorField' => 'language_id']);
        $rules->add($rules->existsIn('conference_timezone_id', 'ConferenceTimezones'), ['errorField' => 'conference_timezone_id']);
        $rules->add($rules->existsIn('conference_type_id', 'ConferenceTypes'), ['errorField' => 'conference_type_id']);
        $rules->add($rules->existsIn('conference_status_id', 'ConferenceStatuses'), ['errorField' => 'conference_status_id']);

        return $rules;
    }
}
