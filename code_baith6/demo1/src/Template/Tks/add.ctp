<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tk $tk
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Tks'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Majors'), ['controller' => 'Majors', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Major'), ['controller' => 'Majors', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tks form large-9 medium-8 columns content">
    <?= $this->Form->create($tk) ?>
    <fieldset>
        <legend><?= __('Add Tk') ?></legend>
        <?php
            echo $this->Form->control('id');
            echo $this->Form->control('major_id', ['options' => $majors, 'empty' => true]);
            echo $this->Form->control('name_major');
            echo $this->Form->control('num_students');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
