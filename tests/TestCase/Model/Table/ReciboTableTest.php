<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ReciboTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ReciboTable Test Case
 */
class ReciboTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ReciboTable
     */
    public $Recibo;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.recibo',
        'app.servico',
        'app.cliente'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Recibo') ? [] : ['className' => 'App\Model\Table\ReciboTable'];
        $this->Recibo = TableRegistry::get('Recibo', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Recibo);

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
