<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MajorsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MajorsTable Test Case
 */
class MajorsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MajorsTable
     */
    public $Majors;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Majors',
        'app.Students',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Majors') ? [] : ['className' => MajorsTable::class];
        $this->Majors = TableRegistry::getTableLocator()->get('Majors', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Majors);

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
