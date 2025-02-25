<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Monhoc Model
 *
 * @method \App\Model\Entity\Monhoc get($primaryKey, $options = [])
 * @method \App\Model\Entity\Monhoc newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Monhoc[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Monhoc|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Monhoc saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Monhoc patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Monhoc[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Monhoc findOrCreate($search, callable $callback = null, $options = [])
 */
class MonhocTable extends Table
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

        $this->setTable('monhoc');
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
            ->scalar('ma_mon')
            ->maxLength('ma_mon', 10)
            ->requirePresence('ma_mon', 'create')
            ->notEmptyString('ma_mon')
            ->add('ma_mon', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('ten_mon')
            ->maxLength('ten_mon', 255)
            ->requirePresence('ten_mon', 'create')
            ->notEmptyString('ten_mon');

        $validator
            ->integer('so_tin_chi')
            ->requirePresence('so_tin_chi', 'create')
            ->notEmptyString('so_tin_chi');

        $validator
            ->boolean('co_tinh_diem_tich_luy')
            ->requirePresence('co_tinh_diem_tich_luy', 'create')
            ->notEmptyString('co_tinh_diem_tich_luy');

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
        $rules->add($rules->isUnique(['ma_mon']));

        return $rules;
    }
}
