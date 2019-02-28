<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Entity\Game;
use App\Model\Table\GamesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GamesTable Test Case
 */
class GamesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\GamesTable
     */
    public $GamesTable;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Games',
        'app.Users',
        'app.Tournaments',
        'app.Moves'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Games') ? [] : ['className' => GamesTable::class];
        $this->GamesTable = TableRegistry::getTableLocator()->get('Games', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->GamesTable);

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

    /**
     * Test current method
     *
     * @return void
     */
    public function testCurrentShouldReturnAGame()
    {
        $game = $this->GamesTable->current(1);
        $this->assertInstanceOf(Game::class, $game);
        $this->assertSame(10, $game->id);
        $this->assertCount(0, $game->moves);
    }

    /**
     * Test current method
     *
     * @return void
     */
    public function testCurrentShouldReturnNull()
    {
        $game = $this->GamesTable->current(2);
        $this->assertNull($game);
    }

    /**
     * Test findOwner method
     *
     * @return void
     */
    public function testFindOwner()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test checkFinished method
     *
     * @return void
     */
    public function testCheckFinished()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test findWon method
     *
     * @return void
     */
    public function testFindWon()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test findLost method
     *
     * @return void
     */
    public function testFindLost()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test afterSave method
     *
     * @return void
     */
    public function testAfterSave()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test findPlayed method
     *
     * @return void
     */
    public function testFindPlayed()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
