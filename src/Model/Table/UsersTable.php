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
 * @property \App\Model\Table\StepsTable&\Cake\ORM\Association\BelongsTo $Steps
 * @property \App\Model\Table\StepStatusesTable&\Cake\ORM\Association\BelongsTo $StepStatuses
 * @property \App\Model\Table\LanguagesTable&\Cake\ORM\Association\BelongsTo $Languages
 * @property \App\Model\Table\CountriesTable&\Cake\ORM\Association\BelongsTo $Countries
 * @property \App\Model\Table\AccountsTable&\Cake\ORM\Association\HasMany $Accounts
 * @property \App\Model\Table\ClicksTable&\Cake\ORM\Association\HasMany $Clicks
 * @property \App\Model\Table\DownlineTable&\Cake\ORM\Association\HasMany $Downline
 * @property \App\Model\Table\InvitationsTable&\Cake\ORM\Association\HasMany $Invitations
 * @property \App\Model\Table\LogsTable&\Cake\ORM\Association\HasMany $Logs
 * @property \App\Model\Table\MatricesTable&\Cake\ORM\Association\HasMany $Matrices
 * @property \App\Model\Table\MessagesTable&\Cake\ORM\Association\HasMany $Messages
 * @property \App\Model\Table\NotesTable&\Cake\ORM\Association\HasMany $Notes
 * @property \App\Model\Table\NotificationsTable&\Cake\ORM\Association\HasMany $Notifications
 * @property \App\Model\Table\OrdersTable&\Cake\ORM\Association\HasMany $Orders
 * @property \App\Model\Table\ProjectStatisticsTable&\Cake\ORM\Association\HasMany $ProjectStatistics
 * @property \App\Model\Table\ReferralsTable&\Cake\ORM\Association\HasMany $Referrals
 * @property \App\Model\Table\SalesTable&\Cake\ORM\Association\HasMany $Sales
 * @property \App\Model\Table\TicketsTable&\Cake\ORM\Association\HasMany $Tickets
 * @property \App\Model\Table\TransactionsTable&\Cake\ORM\Association\HasMany $Transactions
 * @property \App\Model\Table\UnlocksTable&\Cake\ORM\Association\HasMany $Unlocks
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\HasMany $ChildUsers
 * @property \App\Model\Table\VerificationsTable&\Cake\ORM\Association\HasMany $Verifications
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
        $this->belongsTo('Steps', [
            'foreignKey' => 'step_id',
        ]);
        $this->belongsTo('StepStatuses', [
            'foreignKey' => 'step_status_id',
        ]);
        $this->belongsTo('Languages', [
            'foreignKey' => 'language_id',
        ]);
        $this->belongsTo('Countries', [
            'foreignKey' => 'country_id',
        ]);
        $this->hasMany('Accounts', [
            'foreignKey' => 'user_id',
        ]);
        $this->hasMany('Clicks', [
            'foreignKey' => 'user_id',
        ]);
        $this->hasMany('Downline', [
            'foreignKey' => 'user_id',
        ]);
        $this->hasMany('Invitations', [
            'foreignKey' => 'user_id',
        ]);
        $this->hasMany('Logs', [
            'foreignKey' => 'user_id',
        ]);
        $this->hasMany('Matrices', [
            'foreignKey' => 'user_id',
        ]);
        $this->hasMany('Messages', [
            'foreignKey' => 'user_id',
        ]);
        $this->hasMany('Notes', [
            'foreignKey' => 'user_id',
        ]);
        $this->hasMany('Notifications', [
            'foreignKey' => 'user_id',
        ]);
        $this->hasMany('Orders', [
            'foreignKey' => 'user_id',
        ]);
        $this->hasMany('ProjectStatistics', [
            'foreignKey' => 'user_id',
        ]);
        $this->hasMany('Referrals', [
            'foreignKey' => 'user_id',
        ]);
        $this->hasMany('Sales', [
            'foreignKey' => 'user_id',
        ]);
        $this->hasMany('Tickets', [
            'foreignKey' => 'user_id',
        ]);
        $this->hasMany('Transactions', [
            'foreignKey' => 'user_id',
        ]);
        $this->hasMany('Unlocks', [
            'foreignKey' => 'user_id',
        ]);
        $this->hasMany('ChildUsers', [
            'className' => 'Users',
            'foreignKey' => 'parent_id',
        ]);
        $this->hasMany('Verifications', [
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
            ->integer('parent_id')
            ->allowEmptyString('parent_id');

        $validator
            ->scalar('username')
            ->maxLength('username', 45)
            ->allowEmptyString('username')
            ->add('username', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('password')
            ->maxLength('password', 64)
            ->allowEmptyString('password');

        $validator
            ->scalar('first_name')
            ->maxLength('first_name', 45)
            ->allowEmptyString('first_name');

        $validator
            ->scalar('last_name')
            ->maxLength('last_name', 45)
            ->allowEmptyString('last_name');

        $validator
            ->integer('user_role_id')
            ->allowEmptyString('user_role_id');

        $validator
            ->integer('user_status_id')
            ->allowEmptyString('user_status_id');

        $validator
            ->integer('step_id')
            ->allowEmptyString('step_id');

        $validator
            ->integer('step_status_id')
            ->allowEmptyString('step_status_id');

        $validator
            ->date('birthday')
            ->allowEmptyDate('birthday');

        $validator
            ->integer('language_id')
            ->allowEmptyString('language_id');

        $validator
            ->integer('country_id')
            ->allowEmptyString('country_id');

        $validator
            ->scalar('address')
            ->maxLength('address', 45)
            ->allowEmptyString('address');

        $validator
            ->scalar('zip')
            ->maxLength('zip', 45)
            ->allowEmptyString('zip');

        $validator
            ->scalar('city')
            ->maxLength('city', 45)
            ->allowEmptyString('city');

        $validator
            ->scalar('phone')
            ->maxLength('phone', 45)
            ->allowEmptyString('phone');

        $validator
            ->scalar('mobile')
            ->maxLength('mobile', 45)
            ->allowEmptyString('mobile');

        $validator
            ->email('email')
            ->allowEmptyString('email')
            ->add('email', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('telegram')
            ->allowEmptyString('telegram')
            ->add('telegram', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('code')
            ->maxLength('code', 256)
            ->requirePresence('code', 'create')
            ->notEmptyString('code');

        $validator
            ->integer('activated')
            ->notEmptyString('activated');

        $validator
            ->integer('terms')
            ->notEmptyString('terms');

        return $validator;
    }

    /**
     * Profilethumb validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationProfilethumb(Validator $validator): Validator
    {
        $validator
            ->add('profilethumb', [
                'mimeType' => [
                    'rule' => ['mimeType', ['image/jpg', 'image/png', 'image/jpeg']],
                    'message' => 'Неверный формат. Разрешены следующие форматы: .png, .jpeg, .jpg',
                ]
            ])
            ->add('profilethumb', [
                'fileSize' => [
                    'rule' => ['fileSize', '<=', '1MB'],
                    'message' => 'Файл слишком большой. Максимальный размер: 1 MB',
                ]
            ]);

        return $validator;
    }

    /**
     * Password validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationPassword(Validator $validator): Validator
    {
        $validator
            ->add('old_password', [
                'minlength' => [
                    'rule' => ['minLength', 5],
                    'message' => 'Пароль должен быть длиной не менее 5 символов',
                ]
            ])
            ->add('old_password', [
                'maxlength' => [
                    'rule' => ['maxLength', 20],
                    'message' => 'Пароль может состоять максимум из 20 символов.',
                ]
            ])
            ->add('old_password', 'validateOldPassword', [
                'rule' => 'isOldPassword',
                'message' => 'Старый пароль, не совпадает',
                'provider' => 'table',
            ])
            ->notEmptyString('old_password', 'Введите новый пароль');

        $validator
            ->add('password_password', [
                'minlength' => [
                    'rule' => ['minLength', 5],
                    'message' => 'Пароль должен быть длиной не менее 5 символов',
                ]
            ])
            ->add('password_password', [
                'maxlength' => [
                    'rule' => ['maxLength', 20],
                    'message' => 'Пароль может состоять максимум из 20 символов',
                ]
            ])
            ->add('password_password', 'validatePasswordConfirm', [
                'rule' => 'isPasswordConfirm',
                'message' => 'Пароли не совпадают',
                'provider' => 'table',
            ])
            ->notEmptyString('password_password', 'Введите новый пароль');

        $validator
            ->add('password_confirm', [
                'minlength' => [
                    'rule' => ['minLength', 5],
                    'message' => 'Пароль должен быть длиной не менее 5 символов',
                ]
            ])
            ->add('password_confirm', [
                'maxlength' => [
                    'rule' => ['maxLength', 20],
                    'message' => 'Пароль может состоять максимум из 20 символов',
                ]
            ])
            ->add('password_confirm', 'validatePasswordConfirm', [
                'rule' => 'isPasswordConfirm',
                'message' => 'Пароли не совпадают',
                'provider' => 'table',
            ])
            ->notEmptyString('password_confirm', 'Введите новый пароль');

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
        $rules->add($rules->isUnique(['username'], ['allowMultipleNulls' => true]), ['errorField' => 'username']);
        $rules->add($rules->isUnique(['email'], ['allowMultipleNulls' => true]), ['errorField' => 'email']);
        $rules->add($rules->existsIn('parent_id', 'ParentUsers'), ['errorField' => 'parent_id']);
        $rules->add($rules->existsIn('user_role_id', 'UserRoles'), ['errorField' => 'user_role_id']);
        $rules->add($rules->existsIn('user_status_id', 'UserStatuses'), ['errorField' => 'user_status_id']);
        $rules->add($rules->existsIn('step_id', 'Steps'), ['errorField' => 'step_id']);
        $rules->add($rules->existsIn('step_status_id', 'StepStatuses'), ['errorField' => 'step_status_id']);
        $rules->add($rules->existsIn('language_id', 'Languages'), ['errorField' => 'language_id']);
        $rules->add($rules->existsIn('country_id', 'Countries'), ['errorField' => 'country_id']);

        return $rules;
    }


    public function isOldPassword($value, array $context): bool
    {
        $hasher = new DefaultPasswordHasher();
        $user = $this->get($context['data']['id']);

        if ($hasher->check($value, $user->password)) {
            return true;
        } else {
            return false;
        }
    }

    public function isPasswordConfirm($value, array $context): bool
    {
        if ($context['data']['password_password'] != $context['data']['password_confirm']) {
            return false;
        } else {
            return true;
        }
    }

    public function createUser($params = null)
    {

        $data = $this->newEmptyEntity();
        $data->parent_id = $params['parent_id'];
        $data->username = $params['username'];
        $data->password = $params['password'];
        $data->first_name = $params['first_name'];
        $data->last_name = $params['last_name'];
        $data->email = $params['email'];
        $data->code = $params['code'];

        if ($this->save($data)) {
            return $data->id;
        }
    }

    public function getUserByCode($code)
    {

        $count = $this->find('all')
            ->where(['code' => $code])
            ->count();

        if ($count != 0) {

            $user = $this->find('all')
                ->where(['code' => $code])
                ->first();

            if ($user->activated == 0) {
                $message_user = $user->id;
                $message_code = 2;
            } else {
                $message_user = 0;
                $message_code = 3;
            }
        } else {
            $message_user = 0;
            $message_code = 1;
        }

        $message = array(
            'user_id' => $message_user,
            'code' => $message_code
        );

        return $message;

        /*
         * 1 - account not found
         * 2 - account not activated 
         * 3 - account activated successfully
         */
    }

    public function updateUserByCode($code)
    {

        //Find User
        $user = $this->find('all')
            ->where(['code' => $code])
            ->first();

        //User update
        $data = $this->get($user->id);
        $data->activated = '1';

        if ($this->save($data)) {
            return true;
        }
        return false;
    }
}
