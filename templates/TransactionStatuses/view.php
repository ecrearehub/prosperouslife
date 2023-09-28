<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TransactionStatus $transactionStatus
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Transaction Status'), ['action' => 'edit', $transactionStatus->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Transaction Status'), ['action' => 'delete', $transactionStatus->id], ['confirm' => __('Are you sure you want to delete # {0}?', $transactionStatus->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Transaction Statuses'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Transaction Status'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="transactionStatuses view content">
            <h3><?= h($transactionStatus->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($transactionStatus->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($transactionStatus->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Transactions') ?></h4>
                <?php if (!empty($transactionStatus->transactions)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Description') ?></th>
                            <th><?= __('Comment') ?></th>
                            <th><?= __('Amount') ?></th>
                            <th><?= __('Transaction Type Id') ?></th>
                            <th><?= __('Transaction Status Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Updated') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($transactionStatus->transactions as $transactions) : ?>
                        <tr>
                            <td><?= h($transactions->id) ?></td>
                            <td><?= h($transactions->user_id) ?></td>
                            <td><?= h($transactions->description) ?></td>
                            <td><?= h($transactions->comment) ?></td>
                            <td><?= h($transactions->amount) ?></td>
                            <td><?= h($transactions->transaction_type_id) ?></td>
                            <td><?= h($transactions->transaction_status_id) ?></td>
                            <td><?= h($transactions->created) ?></td>
                            <td><?= h($transactions->updated) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Transactions', 'action' => 'view', $transactions->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Transactions', 'action' => 'edit', $transactions->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Transactions', 'action' => 'delete', $transactions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $transactions->id)]) ?>
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
