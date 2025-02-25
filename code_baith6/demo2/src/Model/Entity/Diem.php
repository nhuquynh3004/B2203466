<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Diem Entity
 *
 * @property int $ma_lop_mon_hoc
 * @property int $ma_sinh_vien
 * @property float $diem
 */
class Diem extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'diem' => true,
    ];
}
