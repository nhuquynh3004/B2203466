<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Diem[]|\Cake\Collection\CollectionInterface $diem
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Diem'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="diem index large-9 medium-8 columns content">
    <h3><?= __('Diem') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('ma_lop_mon_hoc') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ma_sinh_vien') ?></th>
                <th scope="col"><?= $this->Paginator->sort('diem') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($diem as $diem): ?>
            <tr>
                <td><?= $this->Number->format($diem->ma_lop_mon_hoc) ?></td>
                <td><?= $this->Number->format($diem->ma_sinh_vien) ?></td>
                <td><?= $this->Number->format($diem->diem) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $diem->ma_lop_mon_hoc]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $diem->ma_lop_mon_hoc]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $diem->ma_lop_mon_hoc], ['confirm' => __('Are you sure you want to delete # {0}?', $diem->ma_lop_mon_hoc)]) ?>
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
