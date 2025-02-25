<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Sinhvien Entity
 *
 * @property int $id
 * @property string $ma_sinh_vien
 * @property string $ho_ten
 * @property \Cake\I18n\FrozenDate $ngay_sinh
 * @property string $email
 * @property string $gioi_tinh
 * @property string $so_dien_thoai
 * @property string $mat_khau
 */
class Sinhvien extends Entity
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
        'ngay_sinh' => true,
        'email' => true,
        'gioi_tinh' => true,
        'so_dien_thoai' => true,
        'mat_khau' => true,
    ];
}
