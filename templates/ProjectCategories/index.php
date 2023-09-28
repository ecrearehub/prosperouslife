<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\ProjectCategory> $projectCategories
 */
?>
<div class="projectCategories index content">
    <?= $this->Html->link(__('New Project Category'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Project Categories') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('sort') ?></th>
                    <th><?= $this->Paginator->sort('counter') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('updated') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($projectCategories as $projectCategory): ?>
                <tr>
                    <td><?= $this->Number->format($projectCategory->id) ?></td>
                    <td><?= h($projectCategory->name) ?></td>
                    <td><?= $projectCategory->sort === null ? '' : $this->Number->format($projectCategory->sort) ?></td>
                    <td><?= $projectCategory->counter === null ? '' : $this->Number->format($projectCategory->counter) ?></td>
                    <td><?= h($projectCategory->created) ?></td>
                    <td><?= h($projectCategory->updated) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $projectCategory->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $projectCategory->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $projectCategory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projectCategory->id)]) ?>
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
