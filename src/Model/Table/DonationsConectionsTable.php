<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DonationsConections Model
 *
 * @property \App\Model\Table\DonationsTable&\Cake\ORM\Association\BelongsTo $Donations
 * @property \App\Model\Table\ConnectionsTable&\Cake\ORM\Association\BelongsTo $Connections
 *
 * @method \App\Model\Entity\DonationsConection newEmptyEntity()
 * @method \App\Model\Entity\DonationsConection newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\DonationsConection[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\DonationsConection get($primaryKey, $options = [])
 * @method \App\Model\Entity\DonationsConection findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\DonationsConection patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\DonationsConection[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\DonationsConection|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DonationsConection saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DonationsConection[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\DonationsConection[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\DonationsConection[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\DonationsConection[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class DonationsConectionsTable extends Table
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

        $this->setTable('donations_conections');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Donations', [
            'foreignKey' => 'donation_id',
        ]);
        $this->belongsTo('Connections', [
            'foreignKey' => 'connection_id',
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
            ->integer('donation_id')
            ->allowEmptyString('donation_id');

        $validator
            ->integer('connection_id')
            ->allowEmptyString('connection_id');

        $validator
            ->scalar('sourceid')
            ->maxLength('sourceid', 45)
            ->allowEmptyString('sourceid');

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
        $rules->add($rules->existsIn('donation_id', 'Donations'), ['errorField' => 'donation_id']);
        $rules->add($rules->existsIn('connection_id', 'Connections'), ['errorField' => 'connection_id']);

        return $rules;
    }
}
