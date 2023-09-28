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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $transactionStatus->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $transactionStatus->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Transaction Statuses'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="transactionStatuses form content">
            <?= $this->Form->create($transactionStatus) ?>
            <fieldset>
                <legend><?= __('Edit Transaction Status') ?></legend>
                <?php
                    echo $this->Form->control('name');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
