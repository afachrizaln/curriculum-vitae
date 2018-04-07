<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Experience[]|\Cake\Collection\CollectionInterface $experiences
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Experience'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="experiences index large-9 medium-8 columns content">
    <h3><?= __('Experiences') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('company') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date_in') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date_out') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($experiences as $experience): ?>
            <tr>
                <td><?= $this->Number->format($experience->id) ?></td>
                <td><?= h($experience->name) ?></td>
                <td><?= h($experience->company) ?></td>
                <td><?= h($experience->date_in) ?></td>
                <td><?= h($experience->date_out) ?></td>
                <td><?= h($experience->created) ?></td>
                <td><?= h($experience->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $experience->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $experience->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $experience->id], ['confirm' => __('Are you sure you want to delete # {0}?', $experience->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
