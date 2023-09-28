<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 *
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $ParentUsers
 * @property \App\Model\Table\UserRolesTable&\Cake\ORM\Association\BelongsTo $UserRoles
 * @property \App\Model\Table\UserStatusesTable&\Cake\ORM\Association\BelongsTo $UserStatuses
 * @property \App\Model\Table\CountriesTable&\Cake\ORM\Association\BelongsTo $Countries
 * @property \App\Model\Table\AccountsTable&\Cake\ORM\Association\HasMany $Accounts
 * @property \App\Model\Table\DonationsTable&\Cake\ORM\Association\HasMany $Donations
 * @property \App\Model\Table\FavoritesTable&\Cake\ORM\Association\HasMany $Favorites
 * @property \App\Model\Table\InvitationsTable&\Cake\ORM\Association\HasMany $Invitations
 * @property \App\Model\Table\LogsTable&\Cake\ORM\Association\HasMany $Logs
 * @property \App\Model\Table\NotesTable&\Cake\ORM\Association\HasMany $Notes
 * @property \App\Model\Table\OrdersTable&\Cake\ORM\Association\HasMany $Orders
 * @property \App\Model\Table\ProjectsTable&\Cake\ORM\Association\HasMany $Projects
 * @property \App\Model\Table\SalesTable&\Cake\ORM\Association\HasMany $Sales
 * @property \App\Model\Table\TransactionsTable&\Cake\ORM\Association\HasMany $Transactions
 * @property \App\Model\Table\UserPrivacySettingsTable&\Cake\ORM\Association\HasMany $UserPrivacySettings
 * @property \App\Model\Table\UserSkillsTable&\Cake\ORM\Association\HasMany $UserSkills
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\HasMany $ChildUsers
 * @property \App\Model\Table\GoalsTable&\Cake\ORM\Association\BelongsToMany $Goals
 * @property \App\Model\Table\LanguagesTable&\Cake\ORM\Association\BelongsToMany $Languages
 * @property \App\Model\Table\TreesTable&\Cake\ORM\Association\BelongsToMany $Trees
 *
 * @method \App\Model\Entity\User newEmptyEntity()
 * @method \App\Model\Entity\User newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\User[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\User get($primaryKey, $options = [])
 * @method \App\Model\Entity\User findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\User patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\User[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\User|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 * @mixin \Cake\ORM\Behavior\TreeBehavior
 */
class UsersTable extends Table
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

        $this->setTable('users');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
        $this->addBehavior('Tree');

        $this->belongsTo('ParentUsers', [
            'className' => 'Users',
            'foreignKey' => 'parent_id',
        ]);
        $this->belongsTo('UserRoles', [
            'foreignKey' => 'user_role_id',
        ]);
        $this->belongsTo('UserStatuses', [
            'foreignKey' => 'user_status_id',
        ]);
        $this->belongsTo('Countries', [
            'foreignKey' => 'country_id',
        ]);
        $this->hasMany('Accounts', [
            'foreignKey' => 'user_id',
        ]);
        $this->hasMany('Donations', [
            'foreignKey' => 'user_id',
        ]);
        $this->hasMany('Favorites', [
            'foreignKey' => 'user_id',
        ]);
        $this->hasMany('Invitations', [
            'foreignKey' => 'user_id',
        ]);
        $this->hasMany('Logs', [
            'foreignKey' => 'user_id',
        ]);
        $this->hasMany('Notes', [
            'foreignKey' => 'user_id',
        ]);
        $this->hasMany('Orders', [
            'foreignKey' => 'user_id',
        ]);
        $this->hasMany('Projects', [
            'foreignKey' => 'user_id',
        ]);
        $this->hasMany('Sales', [
            'foreignKey' => 'user_id',
        ]);
        $this->hasMany('Transactions', [
            'foreignKey' => 'user_id',
        ]);
        $this->hasMany('UserPrivacySettings', [
            'foreignKey' => 'user_id',
        ]);
        $this->hasMany('UserSkills', [
            'foreignKey' => 'user_id',
        ]);
        $this->hasMany('ChildUsers', [
            'className' => 'Users',
            'foreignKey' => 'parent_id',
        ]);
        $this->belongsToMany('Goals', [
            'foreignKey' => 'user_id',
            'targetForeignKey' => 'goal_id',
            'joinTable' => 'users_goals',
        ]);
        $this->belongsToMany('Languages', [
            'foreignKey' => 'user_id',
            'targetForeignKey' => 'language_id',
            'joinTable' => 'users_languages',
        ]);
        $this->belongsToMany('Trees', [
            'foreignKey' => 'user_id',
            'targetForeignKey' => 'tree_id',
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
            ->scalar('parent_id')
            ->maxLength('parent_id', 45)
            ->allowEmptyString('parent_id');

        $validator
            ->scalar('username')
            ->maxLength('username', 45)
            ->allowEmptyString('username');

        $validator
            ->scalar('password')
            ->maxLength('password', 45)
            ->allowEmptyString('password');

        $validator
            ->email('email')
            ->allowEmptyString('email');

        $validator
            ->scalar('first_name')
            ->maxLength('first_name', 45)
            ->allowEmptyString('first_name');

        $validator
            ->scalar('last_name')
            ->maxLength('last_name', 45)
            ->allowEmptyString('last_name');

        $validator
            ->scalar('birthday')
            ->maxLength('birthday', 45)
            ->allowEmptyString('birthday');

        $validator
            ->integer('user_role_id')
            ->allowEmptyString('user_role_id');

        $validator
            ->integer('user_status_id')
            ->allowEmptyString('user_status_id');

        $validator
            ->scalar('skype')
            ->maxLength('skype', 45)
            ->allowEmptyString('skype');

        $validator
            ->scalar('phone')
            ->maxLength('phone', 45)
            ->allowEmptyString('phone');

        $validator
            ->scalar('mobile')
            ->maxLength('mobile', 45)
            ->allowEmptyString('mobile');

        $validator
            ->scalar('address')
            ->maxLength('address', 255)
            ->allowEmptyString('address');

        $validator
            ->scalar('zip')
            ->maxLength('zip', 255)
            ->allowEmptyString('zip');

        $validator
            ->scalar('city')
            ->maxLength('city', 255)
            ->allowEmptyString('city');

        $validator
            ->integer('country_id')
            ->allowEmptyString('country_id');

        $validator
            ->scalar('code')
            ->maxLength('code', 45)
            ->allowEmptyString('code');

        $validator
            ->integer('activation')
            ->allowEmptyString('activation');

        $validator
            ->integer('terms')
            ->allowEmptyString('terms');

        $validator
            ->integer('complete')
            ->allowEmptyString('complete');

        $validator
            ->scalar('last_login')
            ->maxLength('last_login', 45)
            ->allowEmptyString('last_login');

        $validator
            ->integer('newsletter')
            ->notEmptyString('newsletter');

        $validator
            ->scalar('tax_id')
            ->maxLength('tax_id', 255)
            ->allowEmptyString('tax_id');

        $validator
            ->scalar('vat_id')
            ->maxLength('vat_id', 255)
            ->allowEmptyString('vat_id');

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
        $rules->add($rules->isUnique(['username']), ['errorField' => 'username']);
        $rules->add($rules->isUnique(['email']), ['errorField' => 'email']);
        $rules->add($rules->existsIn('parent_id', 'ParentUsers'), ['errorField' => 'parent_id']);
        $rules->add($rules->existsIn('user_role_id', 'UserRoles'), ['errorField' => 'user_role_id']);
        $rules->add($rules->existsIn('user_status_id', 'UserStatuses'), ['errorField' => 'user_status_id']);
        $rules->add($rules->existsIn('country_id', 'Countries'), ['errorField' => 'country_id']);

        return $rules;
    }
}
