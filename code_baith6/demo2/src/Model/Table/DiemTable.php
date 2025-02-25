<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Diem Model
 *
 * @method \App\Model\Entity\Diem get($primaryKey, $options = [])
 * @method \App\Model\Entity\Diem newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Diem[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Diem|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Diem saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Diem patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Diem[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Diem findOrCreate($search, callable $callback = null, $options = [])
 */
class DiemTable extends Table
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

        $this->setTable('diem');
        $this->setDisplayField('ma_lop_mon_hoc');
        $this->setPrimaryKey(['ma_lop_mon_hoc', 'ma_sinh_vien']);
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
            ->integer('ma_lop_mon_hoc')
            ->allowEmptyString('ma_lop_mon_hoc', null, 'create');

        $validator
            ->integer('ma_sinh_vien')
            ->allowEmptyString('ma_sinh_vien', null, 'create');

        $validator
            ->decimal('diem')
            ->requirePresence('diem', 'create')
            ->notEmptyString('diem');

        return $validator;
    }
}
