<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Monhoc[]|\Cake\Collection\CollectionInterface $monhoc
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Monhoc'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="monhoc index large-9 medium-8 columns content">
    <h3><?= __('Monhoc') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ma_mon') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ten_mon') ?></th>
                <th scope="col"><?= $this->Paginator->sort('so_tin_chi') ?></th>
                <th scope="col"><?= $this->Paginator->sort('co_tinh_diem_tich_luy') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($monhoc as $monhoc): ?>
            <tr>
                <td><?= $this->Number->format($monhoc->id) ?></td>
                <td><?= h($monhoc->ma_mon) ?></td>
                <td><?= h($monhoc->ten_mon) ?></td>
                <td><?= $this->Number->format($monhoc->so_tin_chi) ?></td>
                <td><?= h($monhoc->co_tinh_diem_tich_luy) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $monhoc->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $monhoc->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $monhoc->id], ['confirm' => __('Are you sure you want to delete # {0}?', $monhoc->id)]) ?>
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
