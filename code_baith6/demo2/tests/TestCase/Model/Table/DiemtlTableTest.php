<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DiemtlTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DiemtlTable Test Case
 */
class DiemtlTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DiemtlTable
     */
    public $Diemtl;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Diemtl',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Diemtl') ? [] : ['className' => DiemtlTable::class];
        $this->Diemtl = TableRegistry::getTableLocator()->get('Diemtl', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Diemtl);

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
}
