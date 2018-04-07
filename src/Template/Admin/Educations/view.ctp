<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Education $education
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Education'), ['action' => 'edit', $education->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Education'), ['action' => 'delete', $education->id], ['confirm' => __('Are you sure you want to delete # {0}?', $education->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Educations'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Education'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="educations view large-9 medium-8 columns content">
    <h3><?= h($education->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('School') ?></th>
            <td><?= h($education->school) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Degree') ?></th>
            <td><?= h($education->degree) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Field Study') ?></th>
            <td><?= h($education->field_study) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Grade') ?></th>
            <td><?= h($education->grade) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Activities') ?></th>
            <td><?= h($education->activities) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($education->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date In') ?></th>
            <td><?= h($education->date_in) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Out') ?></th>
            <td><?= h($education->date_out) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($education->description)); ?>
    </div>
</div>
