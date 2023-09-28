<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\NewsStatus $newsStatus
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $newsStatus->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $newsStatus->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List News Statuses'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="newsStatuses form content">
            <?= $this->Form->create($newsStatus) ?>
            <fieldset>
                <legend><?= __('Edit News Status') ?></legend>
                <?php
                    echo $this->Form->control('name');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
