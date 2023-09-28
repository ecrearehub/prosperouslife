<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DonationsOperation $donationsOperation
 * @var \Cake\Collection\CollectionInterface|string[] $donations
 * @var \Cake\Collection\CollectionInterface|string[] $operations
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Donations Operations'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="donationsOperations form content">
            <?= $this->Form->create($donationsOperation) ?>
            <fieldset>
                <legend><?= __('Add Donations Operation') ?></legend>
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
