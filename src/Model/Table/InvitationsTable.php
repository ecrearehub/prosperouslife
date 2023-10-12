<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Invitations Model
 *
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\InvitationStatusesTable&\Cake\ORM\Association\BelongsTo $InvitationStatuses
 *
 * @method \App\Model\Entity\Invitation newEmptyEntity()
 * @method \App\Model\Entity\Invitation newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Invitation[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Invitation get($primaryKey, $options = [])
 * @method \App\Model\Entity\Invitation findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Invitation patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Invitation[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Invitation|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Invitation saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Invitation[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Invitation[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Invitation[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Invitation[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class InvitationsTable extends Table
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

        $this->setTable('invitations');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
        ]);
        $this->belongsTo('InvitationStatuses', [
            'foreignKey' => 'invitation_status_id',
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
            ->scalar('first_name')
            ->maxLength('first_name', 45)
            ->notEmptyString('first_name', 'Заполните обязательное поле');

        $validator
            ->scalar('last_name')
            ->maxLength('last_name', 45)
            ->notEmptyString('last_name', 'Заполните обязательное поле');

        $validator
            ->email('email')
            ->notEmptyString('email', 'Заполните обязательное поле')
            ->add('email', 'unique', ['rule' => 'validateUnique', 'message' => 'Email уже существует', 'provider' => 'table']);

        $validator
            ->scalar('subject')
            ->notEmptyString('subject', 'Заполните обязательное поле');

        $validator
            ->scalar('message')
            ->notEmptyString('message', 'Заполните обязательное поле');

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
        $rules->add($rules->isUnique(['email'], ['allowMultipleNulls' => true]), ['errorField' => 'email']);
        $rules->add($rules->existsIn('user_id', 'Users'), ['errorField' => 'user_id']);
        $rules->add($rules->existsIn('invitation_status_id', 'InvitationStatuses'), ['errorField' => 'invitation_status_id']);

        return $rules;
    }

    public function createInvitation($params = null)
    {

        $data = $this->newEmptyEntity();
        $data->user_id = $params['user_id'];
        $data->first_name = $params['first_name'];
        $data->last_name = $params['last_name'];
        $data->email = $params['email'];
        $data->subject = $params['subject'];
        $data->message = $params['message'];
        $data->recall = mktime(0, 0, 0, (int) date('m'), (int) date('d') + 14, (int) date('Y'));

        if ($this->save($data)) {
            return true;
        }
        return false;
    }

    public function getStatistics($user_id)
    {

        //Statistics
        $sent_invitations = $this->find()
            ->where([
                'user_id' => $user_id
            ])
            ->count();

        $open_invitations = $this->find()
            ->where([
                'user_id' => $user_id,
                'invitation_status_id' => 1
            ])
            ->count();

        $accepted_invitations = $this->find()
            ->where([
                'user_id' => $user_id,
                'invitation_status_id' => 2
            ])
            ->count();

        $statistics = array(
            'invitations' => array(
                'sent' => $sent_invitations,
                'open' => $open_invitations,
                'accepted' => $accepted_invitations,
            )
        );

        return $statistics;
    }
}