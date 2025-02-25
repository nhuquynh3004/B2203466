<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Diemtl[]|\Cake\Collection\CollectionInterface $diemtl
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Diemtl'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="diemtl index large-9 medium-8 columns content">
    <h3><?= __('Diemtl') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('ma_sinh_vien') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ho_ten') ?></th>
                <th scope="col"><?= $this->Paginator->sort('so_mon_da_hoc') ?></th>
                <th scope="col"><?= $this->Paginator->sort('so_mon_tich_luy') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tong_tin_chi_tich_luy') ?></th>
                <th scope="col"><?= $this->Paginator->sort('diem_tich_luy') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($diemtl as $diemtl): ?>
            <tr>
                <td><?= h($diemtl->ma_sinh_vien) ?></td>
                <td><?= h($diemtl->ho_ten) ?></td>
                <td><?= $this->Number->format($diemtl->so_mon_da_hoc) ?></td>
                <td><?= $this->Number->format($diemtl->so_mon_tich_luy) ?></td>
                <td><?= $this->Number->format($diemtl->tong_tin_chi_tich_luy) ?></td>
                <td><?= $this->Number->format($diemtl->diem_tich_luy) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $diemtl->ma_sinh_vien]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $diemtl->ma_sinh_vien]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $diemtl->ma_sinh_vien], ['confirm' => __('Are you sure you want to delete # {0}?', $diemtl->ma_sinh_vien)]) ?>
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
