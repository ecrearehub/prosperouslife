<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Operation> $operations
 */
?>
<div class="operations index content">
    <?= $this->Html->link(__('New Operation'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Operations') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('connection_id') ?></th>
                    <th><?= $this->Paginator->sort('sourceid') ?></th>
                    <th><?= $this->Paginator->sort('content') ?></th>
                    <th><?= $this->Paginator->sort('operation_status_id') ?></th>
                    <th><?= $this->Paginator->sort('operation_type_id') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('updated') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($operations as $operation): ?>
                <tr>
                    <td><?= $this->Number->format($operation->id) ?></td>
                    <td><?= $operation->has('connection') ? $this->Html->link($operation->connection->name, ['controller' => 'Connections', 'action' => 'view', $operation->connection->id]) : '' ?></td>
                    <td><?= h($operation->sourceid) ?></td>
                    <td><?= h($operation->content) ?></td>
                    <td><?= $operation->has('operation_status') ? $this->Html->link($operation->operation_status->name, ['controller' => 'OperationStatuses', 'action' => 'view', $operation->operation_status->id]) : '' ?></td>
                    <td><?= $operation->has('operation_type') ? $this->Html->link($operation->operation_type->name, ['controller' => 'OperationTypes', 'action' => 'view', $operation->operation_type->id]) : '' ?></td>
                    <td><?= h($operation->created) ?></td>
                    <td><?= h($operation->updated) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $operation->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $operation->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $operation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $operation->id)]) ?>
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
