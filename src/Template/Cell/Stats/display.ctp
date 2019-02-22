<?php
/**
 * @var \App\View\AppView $this
 */
if ($user) {
    echo $this->Html->link(__('Total won {0} vs {1} lost, {2}', $won, $lost, \App\Utils\Math::formatStatPercentage($won, $lost)), '#');
}
