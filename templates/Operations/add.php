<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Operation $operation
 * @var \Cake\Collection\CollectionInterface|string[] $connections
 * @var \Cake\Collection\CollectionInterface|string[] $operationStatuses
 * @var \Cake\Collection\CollectionInterface|string[] $operationTypes
 * @var \Cake\Collection\CollectionInterface|string[] $donations
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Operations'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="operations form content">
            <?= $this->Form->create($operation) ?>
            <fieldset>
                <legend><?= __('Add Operation') ?></legend>
                <?php
                    echo $this->Form->control('connection_id', ['options' => $connections, 'empty' => true]);
                    echo $this->Form->control('sourceid');
                    echo $this->Form->control('content');
                    echo $this->Form->control('operation_status_id', ['options' => $operationStatuses, 'empty' => true]);
                    echo $this->Form->control('operation_type_id', ['options' => $operationTypes, 'empty' => true]);
                    echo $this->Form->control('donations._ids', ['options' => $donations]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
