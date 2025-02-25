<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Diem $diem
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $diem->ma_lop_mon_hoc],
                ['confirm' => __('Are you sure you want to delete # {0}?', $diem->ma_lop_mon_hoc)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Diem'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="diem form large-9 medium-8 columns content">
    <?= $this->Form->create($diem) ?>
    <fieldset>
        <legend><?= __('Edit Diem') ?></legend>
        <?php
            echo $this->Form->control('diem');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
