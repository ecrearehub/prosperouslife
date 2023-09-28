<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Transaction $transaction
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Transaction'), ['action' => 'edit', $transaction->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Transaction'), ['action' => 'delete', $transaction->id], ['confirm' => __('Are you sure you want to delete # {0}?', $transaction->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Transactions'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Transaction'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="transactions view content">
            <h3><?= h($transaction->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $transaction->has('user') ? $this->Html->link($transaction->user->id, ['controller' => 'Users', 'action' => 'view', $transaction->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Transaction Type') ?></th>
                    <td><?= $transaction->has('transaction_type') ? $this->Html->link($transaction->transaction_type->name, ['controller' => 'TransactionTypes', 'action' => 'view', $transaction->transaction_type->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Transaction Status') ?></th>
                    <td><?= $transaction->has('transaction_status') ? $this->Html->link($transaction->transaction_status->name, ['controller' => 'TransactionStatuses', 'action' => 'view', $transaction->transaction_status->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($transaction->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Updated') ?></th>
                    <td><?= h($transaction->updated) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($transaction->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Amount') ?></th>
                    <td><?= $transaction->amount === null ? '' : $this->Number->format($transaction->amount) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Description') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($transaction->description)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Comment') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($transaction->comment)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Accounts') ?></h4>
                <?php if (!empty($transaction->accounts)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Account Holder') ?></th>
                            <th><?= __('Account') ?></th>
                            <th><?= __('Iban') ?></th>
                            <th><?= __('Bic Swift') ?></th>
                            <th><?= __('Bank Name') ?></th>
                            <th><?= __('Address') ?></th>
                            <th><?= __('Account Status Id') ?></th>
                            <th><?= __('Account Type Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Updated') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($transaction->accounts as $accounts) : ?>
                        <tr>
                            <td><?= h($accounts->id) ?></td>
                            <td><?= h($accounts->user_id) ?></td>
                            <td><?= h($accounts->account_holder) ?></td>
                            <td><?= h($accounts->account) ?></td>
                            <td><?= h($accounts->iban) ?></td>
                            <td><?= h($accounts->bic_swift) ?></td>
                            <td><?= h($accounts->bank_name) ?></td>
                            <td><?= h($accounts->address) ?></td>
                            <td><?= h($accounts->account_status_id) ?></td>
                            <td><?= h($accounts->account_type_id) ?></td>
                            <td><?= h($accounts->created) ?></td>
                            <td><?= h($accounts->updated) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Accounts', 'action' => 'view', $accounts->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Accounts', 'action' => 'edit', $accounts->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Accounts', 'action' => 'delete', $accounts->id], ['confirm' => __('Are you sure you want to delete # {0}?', $accounts->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
