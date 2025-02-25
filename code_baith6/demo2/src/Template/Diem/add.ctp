<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Diem $diem
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Diem'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="diem form large-9 medium-8 columns content">
    <?= $this->Form->create($diem) ?>
    <fieldset>
        <legend><?= __('Add Diem') ?></legend>
        <?php
            echo $this->Form->control('diem');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
