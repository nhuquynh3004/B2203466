<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Lop Entity
 *
 * @property int $id
 * @property int $ma_mon
 * @property string $hoc_ky_nien_khoa
 */
class Lop extends Entity
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
        'hoc_ky_nien_khoa' => true,
    ];
}
