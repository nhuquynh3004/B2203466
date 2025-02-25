<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Sinhvien Model
 *
 * @method \App\Model\Entity\Sinhvien get($primaryKey, $options = [])
 * @method \App\Model\Entity\Sinhvien newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Sinhvien[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Sinhvien|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Sinhvien saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Sinhvien patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Sinhvien[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Sinhvien findOrCreate($search, callable $callback = null, $options = [])
 */
class SinhvienTable extends Table
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

        $this->setTable('sinhvien');
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
            ->scalar('ma_sinh_vien')
            ->maxLength('ma_sinh_vien', 20)
            ->requirePresence('ma_sinh_vien', 'create')
            ->notEmptyString('ma_sinh_vien')
            ->add('ma_sinh_vien', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('ho_ten')
            ->maxLength('ho_ten', 255)
            ->requirePresence('ho_ten', 'create')
            ->notEmptyString('ho_ten');

        $validator
            ->date('ngay_sinh')
            ->requirePresence('ngay_sinh', 'create')
            ->notEmptyDate('ngay_sinh');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmptyString('email')
            ->add('email', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('gioi_tinh')
            ->requirePresence('gioi_tinh', 'create')
            ->notEmptyString('gioi_tinh');

        $validator
            ->scalar('so_dien_thoai')
            ->maxLength('so_dien_thoai', 15)
            ->requirePresence('so_dien_thoai', 'create')
            ->notEmptyString('so_dien_thoai');

        $validator
            ->scalar('mat_khau')
            ->maxLength('mat_khau', 255)
            ->requirePresence('mat_khau', 'create')
            ->notEmptyString('mat_khau');

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
        $rules->add($rules->isUnique(['email']));
        $rules->add($rules->isUnique(['ma_sinh_vien']));

        return $rules;
    }
}
