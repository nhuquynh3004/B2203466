<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LopTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LopTable Test Case
 */
class LopTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\LopTable
     */
    public $Lop;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Lop',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Lop') ? [] : ['className' => LopTable::class];
        $this->Lop = TableRegistry::getTableLocator()->get('Lop', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Lop);

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
