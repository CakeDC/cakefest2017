<?php
/**
 * @var \App\View\AppView $this
 */
if ($user) {
    echo $this->Html->link(__('Total won {0} vs {1} lost', $won, $lost), '#');
}