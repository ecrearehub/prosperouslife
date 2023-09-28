<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * UserPrivacySettings Model
 *
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\UserPrivacySetting newEmptyEntity()
 * @method \App\Model\Entity\UserPrivacySetting newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\UserPrivacySetting[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\UserPrivacySetting get($primaryKey, $options = [])
 * @method \App\Model\Entity\UserPrivacySetting findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\UserPrivacySetting patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\UserPrivacySetting[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\UserPrivacySetting|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\UserPrivacySetting saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\UserPrivacySetting[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\UserPrivacySetting[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\UserPrivacySetting[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\UserPrivacySetting[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class UserPrivacySettingsTable extends Table
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

        $this->setTable('user_privacy_settings');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
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
            ->integer('user_id')
            ->allowEmptyString('user_id');

        $validator
            ->integer('birthday')
            ->allowEmptyString('birthday');

        $validator
            ->integer('goals')
            ->allowEmptyString('goals');

        $validator
            ->integer('skills')
            ->allowEmptyString('skills');

        $validator
            ->integer('projects')
            ->allowEmptyString('projects');

        $validator
            ->integer('legasy')
            ->allowEmptyString('legasy');

        $validator
            ->integer('trees')
            ->allowEmptyString('trees');

        $validator
            ->email('email')
            ->allowEmptyString('email');

        $validator
            ->integer('phone')
            ->allowEmptyString('phone');

        $validator
            ->integer('mobile')
            ->allowEmptyString('mobile');

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
        $rules->add($rules->existsIn('user_id', 'Users'), ['errorField' => 'user_id']);

        return $rules;
    }
}
