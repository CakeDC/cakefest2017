<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * GamesFixture
 *
 */
class GamesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'best_of' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'max number moves to win the game, best of X moves wins', 'precision' => null, 'autoIncrement' => null],
        'user_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'is_player_winner' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'tournament_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_unicode_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'id' => 1,
                'created' => '2019-02-22 10:57:57',
                'modified' => '2019-02-22 10:57:59',
                'best_of' => 1,
                'user_id' => 1,
                'is_player_winner' => false,
                'tournament_id' => null
            ],
            [
                'id' => 2,
                'created' => '2019-02-22 11:18:24',
                'modified' => '2019-02-22 11:18:25',
                'best_of' => 1,
                'user_id' => 1,
                'is_player_winner' => false,
                'tournament_id' => null
            ],
            [
                'id' => 3,
                'created' => '2019-02-22 11:18:28',
                'modified' => '2019-02-22 11:18:29',
                'best_of' => 1,
                'user_id' => 1,
                'is_player_winner' => false,
                'tournament_id' => null
            ],
            [
                'id' => 4,
                'created' => '2019-02-22 11:18:30',
                'modified' => '2019-02-22 11:18:32',
                'best_of' => 1,
                'user_id' => 1,
                'is_player_winner' => true,
                'tournament_id' => null
            ],
            [
                'id' => 10,
                'created' => '2019-02-22 11:18:30',
                'modified' => '2019-02-22 11:18:32',
                'best_of' => 3,
                'user_id' => 1,
                'is_player_winner' => null,
                'tournament_id' => null
            ],
        ];
        parent::init();
    }
}
