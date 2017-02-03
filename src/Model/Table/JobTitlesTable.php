<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * JobTitles Model
 *
 * @property \Cake\ORM\Association\HasMany $Employees
 *
 * @method \App\Model\Entity\JobTitle get($primaryKey, $options = [])
 * @method \App\Model\Entity\JobTitle newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\JobTitle[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\JobTitle|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\JobTitle patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\JobTitle[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\JobTitle findOrCreate($search, callable $callback = null)
 */
class JobTitlesTable extends Table
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

        $this->table('job_titles');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->hasMany('Employees', [
            'foreignKey' => 'job_title_id'
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
