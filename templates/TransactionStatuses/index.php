<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\TransactionStatus> $transactionStatuses
 */
?>
<div class="transactionStatuses index content">
    <?= $this->Html->link(__('New Transaction Status'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Transaction Statuses') ?></h3>
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
                <?php foreach ($transactionStatuses as $transactionStatus): ?>
                <tr>
                    <td><?= $this->Number->format($transactionStatus->id) ?></td>
                    <td><?= h($transactionStatus->name) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $transactionStatus->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $transactionStatus->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $transactionStatus->id], ['confirm' => __('Are you sure you want to delete # {0}?', $transactionStatus->id)]) ?>
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
