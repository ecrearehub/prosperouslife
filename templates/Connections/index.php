<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Connection> $connections
 */
?>
<div class="connections index content">
    <?= $this->Html->link(__('New Connection'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Connections') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($connections as $connection): ?>
                <tr>
                    <td><?= $this->Number->format($connection->id) ?></td>
                    <td><?= h($connection->name) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $connection->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $connection->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $connection->id], ['confirm' => __('Are you sure you want to delete # {0}?', $connection->id)]) ?>
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
