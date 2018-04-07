<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AkbarTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AkbarTable Test Case
 */
class AkbarTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AkbarTable
     */
    public $Akbar;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.akbar'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Akbar') ? [] : ['className' => AkbarTable::class];
        $this->Akbar = TableRegistry::get('Akbar', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Akbar);

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
