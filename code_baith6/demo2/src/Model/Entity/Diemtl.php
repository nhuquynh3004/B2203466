<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Diemtl Entity
 *
 * @property string $ma_sinh_vien
 * @property string $ho_ten
 * @property int $so_mon_da_hoc
 * @property int $so_mon_tich_luy
 * @property float|null $tong_tin_chi_tich_luy
 * @property float|null $diem_tich_luy
 */
class Diemtl extends Entity
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
        'ma_sinh_vien' => true,
        'ho_ten' => true,
        'so_mon_da_hoc' => true,
        'so_mon_tich_luy' => true,
        'tong_tin_chi_tich_luy' => true,
        'diem_tich_luy' => true,
    ];
}
