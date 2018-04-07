<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Education $education
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Educations'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="educations form large-9 medium-8 columns content">
    <?= $this->Form->create($education) ?>
    <fieldset>
        <legend><?= __('Add Education') ?></legend>
        <?php
            echo $this->Form->control('school');
            echo $this->Form->control('degree');
            echo $this->Form->control('field_study');
            echo $this->Form->control('grade');
            echo $this->Form->control('activities');
            echo $this->Form->control('date_in');
            echo $this->Form->control('date_out');
            echo $this->Form->control('description');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
