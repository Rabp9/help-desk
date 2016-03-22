<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TiposIncidenciasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TiposIncidenciasTable Test Case
 */
class TiposIncidenciasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TiposIncidenciasTable
     */
    public $TiposIncidencias;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.tipos_incidencias'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('TiposIncidencias') ? [] : ['className' => 'App\Model\Table\TiposIncidenciasTable'];
        $this->TiposIncidencias = TableRegistry::get('TiposIncidencias', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TiposIncidencias);

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
