<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Diemtl $diemtl
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Diemtl'), ['action' => 'edit', $diemtl->ma_sinh_vien]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Diemtl'), ['action' => 'delete', $diemtl->ma_sinh_vien], ['confirm' => __('Are you sure you want to delete # {0}?', $diemtl->ma_sinh_vien)]) ?> </li>
        <li><?= $this->Html->link(__('List Diemtl'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Diemtl'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="diemtl view large-9 medium-8 columns content">
    <h3><?= h($diemtl->ma_sinh_vien) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Ma Sinh Vien') ?></th>
            <td><?= h($diemtl->ma_sinh_vien) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ho Ten') ?></th>
            <td><?= h($diemtl->ho_ten) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('So Mon Da Hoc') ?></th>
            <td><?= $this->Number->format($diemtl->so_mon_da_hoc) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('So Mon Tich Luy') ?></th>
            <td><?= $this->Number->format($diemtl->so_mon_tich_luy) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tong Tin Chi Tich Luy') ?></th>
            <td><?= $this->Number->format($diemtl->tong_tin_chi_tich_luy) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Diem Tich Luy') ?></th>
            <td><?= $this->Number->format($diemtl->diem_tich_luy) ?></td>
        </tr>
    </table>
</div>
