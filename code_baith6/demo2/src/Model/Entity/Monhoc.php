<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Monhoc Entity
 *
 * @property int $id
 * @property string $ma_mon
 * @property string $ten_mon
 * @property int $so_tin_chi
 * @property bool $co_tinh_diem_tich_luy
 */
class Monhoc extends Entity
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
        'ma_mon' => true,
        'ten_mon' => true,
        'so_tin_chi' => true,
        'co_tinh_diem_tich_luy' => true,
    ];
}
