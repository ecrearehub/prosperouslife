<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TransactionsAccount $transactionsAccount
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Transactions Account'), ['action' => 'edit', $transactionsAccount->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Transactions Account'), ['action' => 'delete', $transactionsAccount->id], ['confirm' => __('Are you sure you want to delete # {0}?', $transactionsAccount->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Transactions Accounts'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Transactions Account'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="transactionsAccounts view content">
            <h3><?= h($transactionsAccount->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Transaction') ?></th>
                    <td><?= $transactionsAccount->has('transaction') ? $this->Html->link($transactionsAccount->transaction->id, ['controller' => 'Transactions', 'action' => 'view', $transactionsAccount->transaction->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Account') ?></th>
                    <td><?= $transactionsAccount->has('account') ? $this->Html->link($transactionsAccount->account->id, ['controller' => 'Accounts', 'action' => 'view', $transactionsAccount->account->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($transactionsAccount->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
