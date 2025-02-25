<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Lop Model
 *
 * @method \App\Model\Entity\Lop get($primaryKey, $options = [])
 * @method \App\Model\Entity\Lop newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Lop[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Lop|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Lop saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Lop patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Lop[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Lop findOrCreate($search, callable $callback = null, $options = [])
 */
class LopTable extends Table
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

        $this->setTable('lop');
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
            ->allowEmptyString('id', null, 'create');

        $validator
            ->integer('ma_mon')
            ->requirePresence('ma_mon', 'create')
            ->notEmptyString('ma_mon');

        $validator
            ->scalar('hoc_ky_nien_khoa')
            ->maxLength('hoc_ky_nien_khoa', 50)
            ->requirePresence('hoc_ky_nien_khoa', 'create')
            ->notEmptyString('hoc_ky_nien_khoa');

        return $validator;
    }
}
