<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Majors Model
 *
 * @property \App\Model\Table\StudentsTable&\Cake\ORM\Association\HasMany $Students
 *
 * @method \App\Model\Entity\Major get($primaryKey, $options = [])
 * @method \App\Model\Entity\Major newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Major[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Major|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Major saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Major patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Major[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Major findOrCreate($search, callable $callback = null, $options = [])
 */
class MajorsTable extends Table
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

        $this->setTable('majors');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('Students', [
            'foreignKey' => 'major_id',
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
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('name_major')
            ->maxLength('name_major', 30)
            ->requirePresence('name_major', 'create')
            ->notEmptyString('name_major');

        return $validator;
    }
}
