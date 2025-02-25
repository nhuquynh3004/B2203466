<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Lop $lop
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Lop'), ['action' => 'edit', $lop->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Lop'), ['action' => 'delete', $lop->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lop->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Lop'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Lop'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="lop view large-9 medium-8 columns content">
    <h3><?= h($lop->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Hoc Ky Nien Khoa') ?></th>
            <td><?= h($lop->hoc_ky_nien_khoa) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($lop->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ma Mon') ?></th>
            <td><?= $this->Number->format($lop->ma_mon) ?></td>
        </tr>
    </table>
</div>
