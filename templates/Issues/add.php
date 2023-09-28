<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Issue $issue
 * @var \Cake\Collection\CollectionInterface|string[] $operations
 * @var \Cake\Collection\CollectionInterface|string[] $issueStatuses
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Issues'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="issues form content">
            <?= $this->Form->create($issue) ?>
            <fieldset>
                <legend><?= __('Add Issue') ?></legend>
                <?php
                    echo $this->Form->control('operation_id', ['options' => $operations, 'empty' => true]);
                    echo $this->Form->control('content');
                    echo $this->Form->control('message');
                    echo $this->Form->control('issue_status_id', ['options' => $issueStatuses, 'empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
