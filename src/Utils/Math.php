<?php
namespace App\Utils;

/**
 * Class Math
 * @package App\Utils
 */
class Math
{
    /**
     * Format percentage of won/lost games
     *
     * @param int $won won games
     * @param int $lost lost games
     * @return string formatted percentage
     * @throws \OutOfBoundsException
     */
    public static function formatStatPercentage(int $won, int $lost) : string
    {
        if ($won < 0 || $lost < 0) {
            throw new \OutOfBoundsException('Won and lost must not be < 0');
        }
        $total = $won + $lost;
        if ($total === 0) {
            return __('Play more games!');
        }

        return round($won / $total * 100) . '%';
    }
}