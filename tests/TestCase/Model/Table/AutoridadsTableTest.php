<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AutoridadsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AutoridadsTable Test Case
 */
class AutoridadsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AutoridadsTable
     */
    public $Autoridads;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.autoridads',
        'app.users'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Autoridads') ? [] : ['className' => AutoridadsTable::class];
        $this->Autoridads = TableRegistry::getTableLocator()->get('Autoridads', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Autoridads);

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
