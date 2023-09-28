<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Connection $connection
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $connection->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $connection->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Connections'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="connections form content">
            <?= $this->Form->create($connection) ?>
            <fieldset>
                <legend><?= __('Edit Connection') ?></legend>
                <?php
                    echo $this->Form->control('name');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
