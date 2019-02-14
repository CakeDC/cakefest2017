<?php

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Move Entity
 *
 * @property int $id
 * @property int|null $user_id
 * @property int|null $game_id
 * @property string|null $player_move
 * @property string|null $computer_move
 * @property bool|null $is_player_winner
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Game $game
 * @property mixed $winner
 */
class Move extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false,
        'user_id' => false,
    ];

    protected function _getWinner()
    {
        if ($this['is_player_winner'] === null) {
            return __('Tie');
        }

        return $this['is_player_winner'] ? __('Player') : __('Computer');
    }
}
