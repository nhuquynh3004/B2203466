<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DiemFixture
 */
class DiemFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'diem';
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'ma_lop_mon_hoc' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'ma_sinh_vien' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'diem' => ['type' => 'decimal', 'length' => 4, 'precision' => 2, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => ''],
        '_indexes' => [
            'ma_sinh_vien' => ['type' => 'index', 'columns' => ['ma_sinh_vien'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['ma_lop_mon_hoc', 'ma_sinh_vien'], 'length' => []],
            'diem_ibfk_1' => ['type' => 'foreign', 'columns' => ['ma_lop_mon_hoc'], 'references' => ['lop', 'id'], 'update' => 'restrict', 'delete' => 'cascade', 'length' => []],
            'diem_ibfk_2' => ['type' => 'foreign', 'columns' => ['ma_sinh_vien'], 'references' => ['sinhvien', 'id'], 'update' => 'restrict', 'delete' => 'cascade', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8mb4_general_ci'
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
                'ma_lop_mon_hoc' => 1,
                'ma_sinh_vien' => 1,
                'diem' => 1.5,
            ],
        ];
        parent::init();
    }
}
