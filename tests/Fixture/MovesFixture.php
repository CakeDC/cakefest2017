<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MovesFixture
 *
 */
class MovesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'user_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'game_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'player_move' => ['type' => 'string', 'length' => 1, 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'computer_move' => ['type' => 'string', 'length' => 1, 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'is_player_winner' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
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
                'user_id' => 1,
                'game_id' => 1,
                'player_move' => 'S',
                'computer_move' => 'R',
                'is_player_winner' => false,
                'created' => '2019-02-22 10:57:59',
                'modified' => '2019-02-22 10:57:59'
            ],
            [
                'id' => 2,
                'user_id' => 1,
                'game_id' => 2,
                'player_move' => 'P',
                'computer_move' => 'P',
                'is_player_winner' => null,
                'created' => '2019-02-22 11:18:25',
                'modified' => '2019-02-22 11:18:25'
            ],
            [
                'id' => 3,
                'user_id' => 1,
                'game_id' => 3,
                'player_move' => 'P',
                'computer_move' => 'S',
                'is_player_winner' => false,
                'created' => '2019-02-22 11:18:29',
                'modified' => '2019-02-22 11:18:29'
            ],
            [
                'id' => 4,
                'user_id' => 1,
                'game_id' => 4,
                'player_move' => 'P',
                'computer_move' => 'R',
                'is_player_winner' => true,
                'created' => '2019-02-22 11:18:32',
                'modified' => '2019-02-22 11:18:32'
            ],
        ];
        parent::init();
    }
}
