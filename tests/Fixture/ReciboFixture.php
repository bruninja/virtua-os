<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ReciboFixture
 *
 */
class ReciboFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'recibo';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'data' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'servico_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'cliente_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_recibo_cliente_idx' => ['type' => 'index', 'columns' => ['cliente_id'], 'length' => []],
            'fk_recibo_servico_idx' => ['type' => 'index', 'columns' => ['servico_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_recibo_cliente' => ['type' => 'foreign', 'columns' => ['cliente_id'], 'references' => ['cliente', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_recibo_servico' => ['type' => 'foreign', 'columns' => ['servico_id'], 'references' => ['servico', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => 1,
            'data' => '2016-12-05',
            'servico_id' => 1,
            'cliente_id' => 1
        ],
    ];
}
