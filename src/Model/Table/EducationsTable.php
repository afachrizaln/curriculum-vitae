<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Educations Model
 *
 * @method \App\Model\Entity\Education get($primaryKey, $options = [])
 * @method \App\Model\Entity\Education newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Education[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Education|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Education patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Education[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Education findOrCreate($search, callable $callback = null, $options = [])
 */
class EducationsTable extends Table
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

        $this->setTable('educations');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
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
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('school')
            ->maxLength('school', 255)
            ->requirePresence('school', 'create')
            ->notEmpty('school');

        $validator
            ->scalar('degree')
            ->maxLength('degree', 255)
            ->requirePresence('degree', 'create')
            ->notEmpty('degree');

        $validator
            ->scalar('field_study')
            ->maxLength('field_study', 255)
            ->requirePresence('field_study', 'create')
            ->notEmpty('field_study');

        $validator
            ->scalar('grade')
            ->maxLength('grade', 255)
            ->requirePresence('grade', 'create')
            ->notEmpty('grade');

        $validator
            ->scalar('activities')
            ->maxLength('activities', 255)
            ->requirePresence('activities', 'create')
            ->notEmpty('activities');

        $validator
            ->date('date_in')
            ->requirePresence('date_in', 'create')
            ->notEmpty('date_in');

        $validator
            ->date('date_out')
            ->requirePresence('date_out', 'create')
            ->notEmpty('date_out');

        $validator
            ->scalar('description')
            ->requirePresence('description', 'create')
            ->notEmpty('description');

        return $validator;
    }
}
