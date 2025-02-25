<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DiemtlFixture
 */
class DiemtlFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'diemtl';
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'ma_sinh_vien' => ['type' => 'string', 'length' => 20, 'null' => false, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'ho_ten' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'so_mon_da_hoc' => ['type' => 'biginteger', 'length' => 21, 'unsigned' => false, 'null' => false, 'default' => '0', 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'so_mon_tich_luy' => ['type' => 'biginteger', 'length' => 21, 'unsigned' => false, 'null' => false, 'default' => '0', 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'tong_tin_chi_tich_luy' => ['type' => 'decimal', 'length' => 32, 'precision' => 0, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'diem_tich_luy' => ['type' => 'decimal', 'length' => 6, 'precision' => 5, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        '_options' => [
            'engine' => null,
            'collation' => null
        ],
    ];
    // @codingStandardsIgnoreEnd
    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'ma_sinh_vien' => 'Lorem ipsum dolor ',
                'ho_ten' => 'Lorem ipsum dolor sit amet',
                'so_mon_da_hoc' => 1,
                'so_mon_tich_luy' => 1,
                'tong_tin_chi_tich_luy' => 1.5,
                'diem_tich_luy' => 1.5,
            ],
        ];
        parent::init();
    }
}
