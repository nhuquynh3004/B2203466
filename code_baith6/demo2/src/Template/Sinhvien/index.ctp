<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sinhvien[]|\Cake\Collection\CollectionInterface $sinhvien
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Sinhvien'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sinhvien index large-9 medium-8 columns content">
    <h3><?= __('Sinhvien') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ma_sinh_vien') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ho_ten') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ngay_sinh') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('gioi_tinh') ?></th>
                <th scope="col"><?= $this->Paginator->sort('so_dien_thoai') ?></th>
                <th scope="col"><?= $this->Paginator->sort('mat_khau') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($sinhvien as $sinhvien): ?>
            <tr>
                <td><?= $this->Number->format($sinhvien->id) ?></td>
                <td><?= h($sinhvien->ma_sinh_vien) ?></td>
                <td><?= h($sinhvien->ho_ten) ?></td>
                <td><?= h($sinhvien->ngay_sinh) ?></td>
                <td><?= h($sinhvien->email) ?></td>
                <td><?= h($sinhvien->gioi_tinh) ?></td>
                <td><?= h($sinhvien->so_dien_thoai) ?></td>
                <td><?= h($sinhvien->mat_khau) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $sinhvien->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $sinhvien->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $sinhvien->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sinhvien->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
