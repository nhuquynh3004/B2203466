<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sinhvien $sinhvien
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Sinhvien'), ['action' => 'edit', $sinhvien->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Sinhvien'), ['action' => 'delete', $sinhvien->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sinhvien->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Sinhvien'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sinhvien'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="sinhvien view large-9 medium-8 columns content">
    <h3><?= h($sinhvien->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Ma Sinh Vien') ?></th>
            <td><?= h($sinhvien->ma_sinh_vien) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ho Ten') ?></th>
            <td><?= h($sinhvien->ho_ten) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($sinhvien->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Gioi Tinh') ?></th>
            <td><?= h($sinhvien->gioi_tinh) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('So Dien Thoai') ?></th>
            <td><?= h($sinhvien->so_dien_thoai) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mat Khau') ?></th>
            <td><?= h($sinhvien->mat_khau) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($sinhvien->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ngay Sinh') ?></th>
            <td><?= h($sinhvien->ngay_sinh) ?></td>
        </tr>
    </table>
</div>
