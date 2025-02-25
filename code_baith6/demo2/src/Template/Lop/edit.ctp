<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Lop $lop
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $lop->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $lop->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Lop'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="lop form large-9 medium-8 columns content">
    <?= $this->Form->create($lop) ?>
    <fieldset>
        <legend><?= __('Edit Lop') ?></legend>
        <?php
            echo $this->Form->control('ma_mon');
            echo $this->Form->control('hoc_ky_nien_khoa');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
