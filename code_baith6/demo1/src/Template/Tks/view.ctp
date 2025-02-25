<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tk $tk
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tk'), ['action' => 'edit', $tk->‘id’]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tk'), ['action' => 'delete', $tk->‘id’], ['confirm' => __('Are you sure you want to delete # {0}?', $tk->‘id’)]) ?> </li>
        <li><?= $this->Html->link(__('List Tks'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tk'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Majors'), ['controller' => 'Majors', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Major'), ['controller' => 'Majors', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tks view large-9 medium-8 columns content">
    <h3><?= h($tk->‘id’) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Major') ?></th>
            <td><?= $tk->has('major') ? $this->Html->link($tk->major->id, ['controller' => 'Majors', 'action' => 'view', $tk->major->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name Major') ?></th>
            <td><?= h($tk->name_major) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($tk->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Num Students') ?></th>
            <td><?= $this->Number->format($tk->num_students) ?></td>
        </tr>
    </table>
</div>
