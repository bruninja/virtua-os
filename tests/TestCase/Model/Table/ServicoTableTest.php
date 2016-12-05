<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ServicoTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ServicoTable Test Case
 */
class ServicoTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ServicoTable
     */
    public $Servico;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.servico',
        'app.recibo',
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
        $config = TableRegistry::exists('Servico') ? [] : ['className' => 'App\Model\Table\ServicoTable'];
        $this->Servico = TableRegistry::get('Servico', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Servico);

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
