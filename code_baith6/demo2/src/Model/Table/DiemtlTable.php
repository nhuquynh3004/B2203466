<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Diemtl Model
 *
 * @method \App\Model\Entity\Diemtl get($primaryKey, $options = [])
 * @method \App\Model\Entity\Diemtl newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Diemtl[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Diemtl|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Diemtl saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Diemtl patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Diemtl[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Diemtl findOrCreate($search, callable $callback = null, $options = [])
 */
class DiemtlTable extends Table
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

        $this->setTable('diemtl');
        $this->setDisplayField('ma_sinh_vien');
        $this->setPrimaryKey('ma_sinh_vien');
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
            ->scalar('ma_sinh_vien')
            ->maxLength('ma_sinh_vien', 20)
            ->requirePresence('ma_sinh_vien', 'create')
            ->notEmptyString('ma_sinh_vien');

        $validator
            ->scalar('ho_ten')
            ->maxLength('ho_ten', 255)
            ->requirePresence('ho_ten', 'create')
            ->notEmptyString('ho_ten');

        $validator
            ->notEmptyString('so_mon_da_hoc');

        $validator
            ->notEmptyString('so_mon_tich_luy');

        $validator
            ->decimal('tong_tin_chi_tich_luy')
            ->allowEmptyString('tong_tin_chi_tich_luy');

        $validator
            ->decimal('diem_tich_luy')
            ->allowEmptyString('diem_tich_luy');

        return $validator;
    }
}
