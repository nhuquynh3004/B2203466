<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SinhvienTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SinhvienTable Test Case
 */
class SinhvienTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SinhvienTable
     */
    public $Sinhvien;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Sinhvien',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Sinhvien') ? [] : ['className' => SinhvienTable::class];
        $this->Sinhvien = TableRegistry::getTableLocator()->get('Sinhvien', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Sinhvien);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
