<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Diemtl $diemtl
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $diemtl->ma_sinh_vien],
                ['confirm' => __('Are you sure you want to delete # {0}?', $diemtl->ma_sinh_vien)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Diemtl'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="diemtl form large-9 medium-8 columns content">
    <?= $this->Form->create($diemtl) ?>
    <fieldset>
        <legend><?= __('Edit Diemtl') ?></legend>
        <?php
            echo $this->Form->control('ho_ten');
            echo $this->Form->control('so_mon_da_hoc');
            echo $this->Form->control('so_mon_tich_luy');
            echo $this->Form->control('tong_tin_chi_tich_luy');
            echo $this->Form->control('diem_tich_luy');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
