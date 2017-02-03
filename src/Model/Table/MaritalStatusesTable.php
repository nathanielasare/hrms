<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MaritalStatuses Model
 *
 * @property \Cake\ORM\Association\HasMany $Employees
 *
 * @method \App\Model\Entity\MaritalStatus get($primaryKey, $options = [])
 * @method \App\Model\Entity\MaritalStatus newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\MaritalStatus[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MaritalStatus|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MaritalStatus patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MaritalStatus[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\MaritalStatus findOrCreate($search, callable $callback = null)
 */
class MaritalStatusesTable extends Table
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

        $this->table('marital_statuses');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->hasMany('Employees', [
            'foreignKey' => 'marital_status_id'
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
            ->allowEmpty('name');

        $validator
            ->boolean('status')
            ->allowEmpty('status');

        return $validator;
    }
}
