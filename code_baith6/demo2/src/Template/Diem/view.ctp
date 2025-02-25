<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Diem $diem
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Diem'), ['action' => 'edit', $diem->ma_lop_mon_hoc]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Diem'), ['action' => 'delete', $diem->ma_lop_mon_hoc], ['confirm' => __('Are you sure you want to delete # {0}?', $diem->ma_lop_mon_hoc)]) ?> </li>
        <li><?= $this->Html->link(__('List Diem'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Diem'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="diem view large-9 medium-8 columns content">
    <h3><?= h($diem->ma_lop_mon_hoc) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Ma Lop Mon Hoc') ?></th>
            <td><?= $this->Number->format($diem->ma_lop_mon_hoc) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ma Sinh Vien') ?></th>
            <td><?= $this->Number->format($diem->ma_sinh_vien) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Diem') ?></th>
            <td><?= $this->Number->format($diem->diem) ?></td>
        </tr>
    </table>
</div>
