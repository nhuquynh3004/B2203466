<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Major $major
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $major->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $major->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Majors'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Students'), ['controller' => 'Students', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Student'), ['controller' => 'Students', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="majors form large-9 medium-8 columns content">
    <?= $this->Form->create($major) ?>
    <fieldset>
        <legend><?= __('Edit Major') ?></legend>
        <?php
            echo $this->Form->control('name_major');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
