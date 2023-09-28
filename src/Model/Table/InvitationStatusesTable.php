<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * InvitationStatuses Model
 *
 * @property \App\Model\Table\InvitationsTable&\Cake\ORM\Association\HasMany $Invitations
 *
 * @method \App\Model\Entity\InvitationStatus newEmptyEntity()
 * @method \App\Model\Entity\InvitationStatus newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\InvitationStatus[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\InvitationStatus get($primaryKey, $options = [])
 * @method \App\Model\Entity\InvitationStatus findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\InvitationStatus patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\InvitationStatus[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\InvitationStatus|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\InvitationStatus saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\InvitationStatus[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\InvitationStatus[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\InvitationStatus[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\InvitationStatus[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class InvitationStatusesTable extends Table
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

        $this->setTable('invitation_statuses');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->hasMany('Invitations', [
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
            ->scalar('name')
            ->maxLength('name', 45)
            ->allowEmptyString('name');

        return $validator;
    }
}
