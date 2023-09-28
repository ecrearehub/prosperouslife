<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ItemStatus $itemStatus
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $itemStatus->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $itemStatus->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Item Statuses'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="itemStatuses form content">
            <?= $this->Form->create($itemStatus) ?>
            <fieldset>
                <legend><?= __('Edit Item Status') ?></legend>
                <?php
                    echo $this->Form->control('name');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
