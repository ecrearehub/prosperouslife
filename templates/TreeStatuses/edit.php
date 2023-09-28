<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TreeStatus $treeStatus
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $treeStatus->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $treeStatus->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Tree Statuses'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="treeStatuses form content">
            <?= $this->Form->create($treeStatus) ?>
            <fieldset>
                <legend><?= __('Edit Tree Status') ?></legend>
                <?php
                    echo $this->Form->control('name');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
