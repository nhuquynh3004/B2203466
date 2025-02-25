<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Monhoc $monhoc
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Monhoc'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="monhoc form large-9 medium-8 columns content">
    <?= $this->Form->create($monhoc) ?>
    <fieldset>
        <legend><?= __('Add Monhoc') ?></legend>
        <?php
            echo $this->Form->control('ma_mon');
            echo $this->Form->control('ten_mon');
            echo $this->Form->control('so_tin_chi');
            echo $this->Form->control('co_tinh_diem_tich_luy');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
