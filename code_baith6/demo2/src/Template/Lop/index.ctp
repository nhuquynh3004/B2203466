<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Lop[]|\Cake\Collection\CollectionInterface $lop
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Lop'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="lop index large-9 medium-8 columns content">
    <h3><?= __('Lop') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ma_mon') ?></th>
                <th scope="col"><?= $this->Paginator->sort('hoc_ky_nien_khoa') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($lop as $lop): ?>
            <tr>
                <td><?= $this->Number->format($lop->id) ?></td>
                <td><?= $this->Number->format($lop->ma_mon) ?></td>
                <td><?= h($lop->hoc_ky_nien_khoa) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $lop->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $lop->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $lop->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lop->id)]) ?>
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
