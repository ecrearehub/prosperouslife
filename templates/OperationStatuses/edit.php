<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OperationStatus $operationStatus
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $operationStatus->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $operationStatus->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Operation Statuses'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="operationStatuses form content">
            <?= $this->Form->create($operationStatus) ?>
            <fieldset>
                <legend><?= __('Edit Operation Status') ?></legend>
                <?php
                    echo $this->Form->control('name');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
