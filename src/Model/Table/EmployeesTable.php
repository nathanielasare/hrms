<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Employees Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Countries
 * @property \Cake\ORM\Association\BelongsTo $MaritalStatuses
 * @property \Cake\ORM\Association\BelongsTo $JobTitles
 *
 * @method \App\Model\Entity\Employee get($primaryKey, $options = [])
 * @method \App\Model\Entity\Employee newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Employee[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Employee|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Employee patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Employee[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Employee findOrCreate($search, callable $callback = null)
 */
class EmployeesTable extends Table
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

        $this->table('employees');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Countries', [
            'foreignKey' => 'country_id'
        ]);
        $this->belongsTo('MaritalStatuses', [
            'foreignKey' => 'marital_status_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('JobTitles', [
            'foreignKey' => 'job_title_id',
            'joinType' => 'INNER'
        ]);
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
            ->integer('employe_number')
            ->requirePresence('employe_number', 'create')
            ->notEmpty('employe_number');

        $validator
            ->requirePresence('lastname', 'create')
            ->notEmpty('lastname');

        $validator
            ->requirePresence('firstname', 'create')
            ->notEmpty('firstname');

        $validator
            ->requirePresence('middle_name', 'create')
            ->notEmpty('middle_name');

        $validator
            ->allowEmpty('nick_name');

        $validator
            ->date('birthday')
            ->allowEmpty('birthday');

        $validator
            ->integer('gender')
            ->allowEmpty('gender');

        $validator
            ->allowEmpty('ssn_num');

        $validator
            ->allowEmpty('drv_lin_num');

        $validator
            ->date('drv_lin_exp_date')
            ->allowEmpty('drv_lin_exp_date');

        $validator
            ->date('joined_date')
            ->allowEmpty('joined_date');

        $validator
            ->integer('status')
            ->allowEmpty('status');

        $validator
            ->allowEmpty('street1');

        $validator
            ->allowEmpty('street2');

        $validator
            ->allowEmpty('city_code');

        $validator
            ->allowEmpty('coun_code');

        $validator
            ->allowEmpty('provin_code');

        $validator
            ->allowEmpty('zipcode');

        $validator
            ->allowEmpty('home_telephone');

        $validator
            ->allowEmpty('mobile');

        $validator
            ->allowEmpty('work_telephone');

        $validator
            ->allowEmpty('work_email');

        $validator
            ->allowEmpty('other_email');

        $validator
            ->integer('smoker')
            ->allowEmpty('smoker');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['country_id'], 'Countries'));
        $rules->add($rules->existsIn(['marital_status_id'], 'MaritalStatuses'));
        $rules->add($rules->existsIn(['job_title_id'], 'JobTitles'));

        return $rules;
    }
}
