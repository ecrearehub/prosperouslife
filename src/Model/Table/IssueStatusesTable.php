<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * IssueStatuses Model
 *
 * @property \App\Model\Table\IssuesTable&\Cake\ORM\Association\HasMany $Issues
 *
 * @method \App\Model\Entity\IssueStatus newEmptyEntity()
 * @method \App\Model\Entity\IssueStatus newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\IssueStatus[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\IssueStatus get($primaryKey, $options = [])
 * @method \App\Model\Entity\IssueStatus findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\IssueStatus patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\IssueStatus[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\IssueStatus|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\IssueStatus saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\IssueStatus[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\IssueStatus[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\IssueStatus[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\IssueStatus[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class IssueStatusesTable extends Table
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

        $this->setTable('issue_statuses');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->hasMany('Issues', [
            'foreignKey' => 'issue_status_id',
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
