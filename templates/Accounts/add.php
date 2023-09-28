<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Account $account
 * @var \Cake\Collection\CollectionInterface|string[] $users
 * @var \Cake\Collection\CollectionInterface|string[] $accountStatuses
 * @var \Cake\Collection\CollectionInterface|string[] $accountTypes
 * @var \Cake\Collection\CollectionInterface|string[] $transactions
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Accounts'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="accounts form content">
            <?= $this->Form->create($account) ?>
            <fieldset>
                <legend><?= __('Add Account') ?></legend>
                <?php
                    echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
                    echo $this->Form->control('account_holder');
                    echo $this->Form->control('account');
                    echo $this->Form->control('iban');
                    echo $this->Form->control('bic_swift');
                    echo $this->Form->control('bank_name');
                    echo $this->Form->control('address');
                    echo $this->Form->control('account_status_id', ['options' => $accountStatuses, 'empty' => true]);
                    echo $this->Form->control('account_type_id', ['options' => $accountTypes, 'empty' => true]);
                    echo $this->Form->control('transactions._ids', ['options' => $transactions]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
