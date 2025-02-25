<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sinhvien $sinhvien
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Sinhvien'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="sinhvien form large-9 medium-8 columns content">
    <?= $this->Form->create($sinhvien) ?>
    <fieldset>
        <legend><?= __('Add Sinhvien') ?></legend>
        <?php
            echo $this->Form->control('ma_sinh_vien');
            echo $this->Form->control('ho_ten');
            echo $this->Form->control('ngay_sinh');
            echo $this->Form->control('email');
            echo $this->Form->control('gioi_tinh');
            echo $this->Form->control('so_dien_thoai');
            echo $this->Form->control('mat_khau');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
