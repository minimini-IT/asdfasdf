<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MessageStatuses Model
 *
 * @method \App\Model\Entity\MessageStatus get($primaryKey, $options = [])
 * @method \App\Model\Entity\MessageStatus newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\MessageStatus[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MessageStatus|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MessageStatus saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MessageStatus patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MessageStatus[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\MessageStatus findOrCreate($search, callable $callback = null, $options = [])
 */
class MessageStatusesTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('message_statuses');
        $this->setDisplayField('status');
        $this->setPrimaryKey('message_statuses_id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('message_statuses_id')
            ->allowEmptyString('message_statuses_id', null, 'create');

        $validator
            ->scalar('status')
            ->maxLength('status', 255)
            ->requirePresence('status', 'create')
            ->notEmptyString('status');

        return $validator;
    }
}
