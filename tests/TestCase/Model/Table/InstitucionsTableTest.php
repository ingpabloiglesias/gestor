<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\InstitucionsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\InstitucionsTable Test Case
 */
class InstitucionsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\InstitucionsTable
     */
    public $Institucions;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.institucions',
        'app.equipos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Institucions') ? [] : ['className' => InstitucionsTable::class];
        $this->Institucions = TableRegistry::getTableLocator()->get('Institucions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Institucions);

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
