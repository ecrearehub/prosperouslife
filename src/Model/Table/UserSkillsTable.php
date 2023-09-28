<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * UserSkills Model
 *
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\UserSkill newEmptyEntity()
 * @method \App\Model\Entity\UserSkill newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\UserSkill[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\UserSkill get($primaryKey, $options = [])
 * @method \App\Model\Entity\UserSkill findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\UserSkill patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\UserSkill[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\UserSkill|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\UserSkill saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\UserSkill[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\UserSkill[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\UserSkill[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\UserSkill[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class UserSkillsTable extends Table
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

        $this->setTable('user_skills');
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
            ->scalar('description')
            ->allowEmptyString('description');

        $validator
            ->integer('hours')
            ->allowEmptyString('hours');

        $validator
            ->integer('months')
            ->allowEmptyString('months');

        $validator
            ->integer('skill_blogging')
            ->allowEmptyString('skill_blogging');

        $validator
            ->integer('skill_communication')
            ->allowEmptyString('skill_communication');

        $validator
            ->integer('skill_marketing')
            ->allowEmptyString('skill_marketing');

        $validator
            ->integer('skill_systems')
            ->allowEmptyString('skill_systems');

        $validator
            ->integer('skill_web_development')
            ->allowEmptyString('skill_web_development');

        $validator
            ->integer('skill_programming')
            ->allowEmptyString('skill_programming');

        $validator
            ->integer('skill_engineering')
            ->allowEmptyString('skill_engineering');

        $validator
            ->integer('skill_accounting')
            ->allowEmptyString('skill_accounting');

        $validator
            ->integer('skill_sales')
            ->allowEmptyString('skill_sales');

        $validator
            ->integer('skill_leadership')
            ->allowEmptyString('skill_leadership');

        $validator
            ->integer('skill_teamwork')
            ->allowEmptyString('skill_teamwork');

        $validator
            ->integer('skill_coordination')
            ->allowEmptyString('skill_coordination');

        $validator
            ->integer('skill_planning')
            ->allowEmptyString('skill_planning');

        $validator
            ->integer('skill_project_management')
            ->allowEmptyString('skill_project_management');

        $validator
            ->integer('skill_negotiation')
            ->allowEmptyString('skill_negotiation');

        $validator
            ->integer('skill_networking')
            ->allowEmptyString('skill_networking');

        $validator
            ->integer('skill_entrepreneurship')
            ->allowEmptyString('skill_entrepreneurship');

        $validator
            ->integer('skill_creativity')
            ->allowEmptyString('skill_creativity');

        $validator
            ->integer('skill_designing')
            ->allowEmptyString('skill_designing');

        $validator
            ->integer('skill_photography')
            ->allowEmptyString('skill_photography');

        $validator
            ->integer('skill_film')
            ->allowEmptyString('skill_film');

        $validator
            ->integer('skill_music')
            ->allowEmptyString('skill_music');

        $validator
            ->integer('skill_crafting')
            ->allowEmptyString('skill_crafting');

        $validator
            ->integer('skill_teaching')
            ->allowEmptyString('skill_teaching');

        $validator
            ->integer('skill_working_with_children')
            ->allowEmptyString('skill_working_with_children');

        $validator
            ->integer('skill_natural_sciences')
            ->allowEmptyString('skill_natural_sciences');

        $validator
            ->integer('skill_medical')
            ->allowEmptyString('skill_medical');

        $validator
            ->integer('skill_martial_arts')
            ->allowEmptyString('skill_martial_arts');

        $validator
            ->integer('skill_yoga_pilates')
            ->allowEmptyString('skill_yoga_pilates');

        $validator
            ->scalar('skill_others')
            ->allowEmptyString('skill_others');

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
