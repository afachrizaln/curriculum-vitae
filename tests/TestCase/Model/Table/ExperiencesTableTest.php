<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ExperiencesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ExperiencesTable Test Case
 */
class ExperiencesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ExperiencesTable
     */
    public $Experiences;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.experiences'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Experiences') ? [] : ['className' => ExperiencesTable::class];
        $this->Experiences = TableRegistry::get('Experiences', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Experiences);

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
