<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ConferenceTimezones Model
 *
 * @property \App\Model\Table\ConferencesTable&\Cake\ORM\Association\HasMany $Conferences
 *
 * @method \App\Model\Entity\ConferenceTimezone newEmptyEntity()
 * @method \App\Model\Entity\ConferenceTimezone newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\ConferenceTimezone[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ConferenceTimezone get($primaryKey, $options = [])
 * @method \App\Model\Entity\ConferenceTimezone findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\ConferenceTimezone patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ConferenceTimezone[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\ConferenceTimezone|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ConferenceTimezone saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ConferenceTimezone[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ConferenceTimezone[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\ConferenceTimezone[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ConferenceTimezone[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ConferenceTimezonesTable extends Table
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

        $this->setTable('conference_timezones');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->hasMany('Conferences', [
            'foreignKey' => 'conference_timezone_id',
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
            ->maxLength('name', 35)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->scalar('country_code')
            ->maxLength('country_code', 2)
            ->requirePresence('country_code', 'create')
            ->notEmptyString('country_code');

        return $validator;
    }
}
