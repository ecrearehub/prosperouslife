<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Goal> $goals
 */
?>
<div class="goals index content">
    <?= $this->Html->link(__('New Goal'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Goals') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('sort') ?></th>
                    <th><?= $this->Paginator->sort('users') ?></th>
                    <th><?= $this->Paginator->sort('projects') ?></th>
                    <th><?= $this->Paginator->sort('clicks') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('updated') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($goals as $goal): ?>
                <tr>
                    <td><?= $this->Number->format($goal->id) ?></td>
                    <td><?= h($goal->name) ?></td>
                    <td><?= $goal->sort === null ? '' : $this->Number->format($goal->sort) ?></td>
                    <td><?= $goal->users === null ? '' : $this->Number->format($goal->users) ?></td>
                    <td><?= $goal->projects === null ? '' : $this->Number->format($goal->projects) ?></td>
                    <td><?= $goal->clicks === null ? '' : $this->Number->format($goal->clicks) ?></td>
                    <td><?= h($goal->created) ?></td>
                    <td><?= h($goal->updated) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $goal->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $goal->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $goal->id], ['confirm' => __('Are you sure you want to delete # {0}?', $goal->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
