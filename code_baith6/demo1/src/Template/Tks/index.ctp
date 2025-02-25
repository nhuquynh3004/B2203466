<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tk[]|\Cake\Collection\CollectionInterface $tks
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Tk'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Majors'), ['controller' => 'Majors', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Major'), ['controller' => 'Majors', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tks index large-9 medium-8 columns content">
    <h3><?= __('Tks') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('major_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name_major') ?></th>
                <th scope="col"><?= $this->Paginator->sort('num_students') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tks as $tk): ?>
            <tr>
                <td><?= $this->Number->format($tk->id) ?></td>
                <td><?= $tk->has('major') ? $this->Html->link($tk->major->id, ['controller' => 'Majors', 'action' => 'view', $tk->major->id]) : '' ?></td>
                <td><?= h($tk->name_major) ?></td>
                <td><?= $this->Number->format($tk->num_students) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $tk->‘id’]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tk->‘id’]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tk->‘id’], ['confirm' => __('Are you sure you want to delete # {0}?', $tk->‘id’)]) ?>
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
