<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Monhoc $monhoc
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Monhoc'), ['action' => 'edit', $monhoc->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Monhoc'), ['action' => 'delete', $monhoc->id], ['confirm' => __('Are you sure you want to delete # {0}?', $monhoc->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Monhoc'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Monhoc'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="monhoc view large-9 medium-8 columns content">
    <h3><?= h($monhoc->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Ma Mon') ?></th>
            <td><?= h($monhoc->ma_mon) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ten Mon') ?></th>
            <td><?= h($monhoc->ten_mon) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($monhoc->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('So Tin Chi') ?></th>
            <td><?= $this->Number->format($monhoc->so_tin_chi) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Co Tinh Diem Tich Luy') ?></th>
            <td><?= $monhoc->co_tinh_diem_tich_luy ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
