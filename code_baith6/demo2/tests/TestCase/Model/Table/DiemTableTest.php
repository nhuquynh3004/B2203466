<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DiemTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DiemTable Test Case
 */
class DiemTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DiemTable
     */
    public $Diem;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Diem',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Diem') ? [] : ['className' => DiemTable::class];
        $this->Diem = TableRegistry::getTableLocator()->get('Diem', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Diem);

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
