<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DonationsOperation $donationsOperation
 * @var string[]|\Cake\Collection\CollectionInterface $donations
 * @var string[]|\Cake\Collection\CollectionInterface $operations
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $donationsOperation->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $donationsOperation->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Donations Operations'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="donationsOperations form content">
            <?= $this->Form->create($donationsOperation) ?>
            <fieldset>
                <legend><?= __('Edit Donations Operation') ?></legend>
                <?php
                    echo $this->Form->control('donation_id', ['options' => $donations, 'empty' => true]);
                    echo $this->Form->control('operation_id', ['options' => $operations, 'empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
