<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TransactionsAccount $transactionsAccount
 * @var string[]|\Cake\Collection\CollectionInterface $transactions
 * @var string[]|\Cake\Collection\CollectionInterface $accounts
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $transactionsAccount->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $transactionsAccount->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Transactions Accounts'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="transactionsAccounts form content">
            <?= $this->Form->create($transactionsAccount) ?>
            <fieldset>
                <legend><?= __('Edit Transactions Account') ?></legend>
                <?php
                    echo $this->Form->control('transaction_id', ['options' => $transactions, 'empty' => true]);
                    echo $this->Form->control('account_id', ['options' => $accounts, 'empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
