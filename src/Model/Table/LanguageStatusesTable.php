<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * LanguageStatuses Model
 *
 * @property \App\Model\Table\LanguagesTable&\Cake\ORM\Association\HasMany $Languages
 *
 * @method \App\Model\Entity\LanguageStatus newEmptyEntity()
 * @method \App\Model\Entity\LanguageStatus newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\LanguageStatus[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\LanguageStatus get($primaryKey, $options = [])
 * @method \App\Model\Entity\LanguageStatus findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\LanguageStatus patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\LanguageStatus[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\LanguageStatus|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\LanguageStatus saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\LanguageStatus[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\LanguageStatus[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\LanguageStatus[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\LanguageStatus[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class LanguageStatusesTable extends Table
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

        $this->setTable('language_statuses');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->hasMany('Languages', [
            'foreignKey' => 'language_status_id',
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
