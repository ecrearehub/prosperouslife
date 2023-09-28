<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\TransactionsAccount> $transactionsAccounts
 */
?>
<div class="transactionsAccounts index content">
    <?= $this->Html->link(__('New Transactions Account'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Transactions Accounts') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('transaction_id') ?></th>
                    <th><?= $this->Paginator->sort('account_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($transactionsAccounts as $transactionsAccount): ?>
                <tr>
                    <td><?= $this->Number->format($transactionsAccount->id) ?></td>
                    <td><?= $transactionsAccount->has('transaction') ? $this->Html->link($transactionsAccount->transaction->id, ['controller' => 'Transactions', 'action' => 'view', $transactionsAccount->transaction->id]) : '' ?></td>
                    <td><?= $transactionsAccount->has('account') ? $this->Html->link($transactionsAccount->account->id, ['controller' => 'Accounts', 'action' => 'view', $transactionsAccount->account->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $transactionsAccount->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $transactionsAccount->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $transactionsAccount->id], ['confirm' => __('Are you sure you want to delete # {0}?', $transactionsAccount->id)]) ?>
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
