<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Tree> $trees
 */
?>
<div class="trees index content">
    <?= $this->Html->link(__('New Tree'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Trees') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('tree_status_id') ?></th>
                    <th><?= $this->Paginator->sort('tree_type_id') ?></th>
                    <th><?= $this->Paginator->sort('tree_kind_id') ?></th>
                    <th><?= $this->Paginator->sort('location') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('updated') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($trees as $tree): ?>
                <tr>
                    <td><?= $this->Number->format($tree->id) ?></td>
                    <td><?= $tree->has('tree_status') ? $this->Html->link($tree->tree_status->name, ['controller' => 'TreeStatuses', 'action' => 'view', $tree->tree_status->id]) : '' ?></td>
                    <td><?= $tree->has('tree_type') ? $this->Html->link($tree->tree_type->name, ['controller' => 'TreeTypes', 'action' => 'view', $tree->tree_type->id]) : '' ?></td>
                    <td><?= $tree->has('tree_kind') ? $this->Html->link($tree->tree_kind->name, ['controller' => 'TreeKinds', 'action' => 'view', $tree->tree_kind->id]) : '' ?></td>
                    <td><?= h($tree->location) ?></td>
                    <td><?= h($tree->created) ?></td>
                    <td><?= h($tree->updated) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $tree->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tree->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tree->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tree->id)]) ?>
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
