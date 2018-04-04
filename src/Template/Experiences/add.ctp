<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Experience $experience
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Experiences'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="experiences form large-9 medium-8 columns content">
    <?= $this->Form->create($experience) ?>
    <fieldset>
        <legend><?= __('Add Experience') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('company');
            echo $this->Form->control('date_in');
            echo $this->Form->control('date_out');
            echo $this->Form->control('description');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
