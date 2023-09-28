<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TreeKind $treeKind
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $treeKind->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $treeKind->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Tree Kinds'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="treeKinds form content">
            <?= $this->Form->create($treeKind) ?>
            <fieldset>
                <legend><?= __('Edit Tree Kind') ?></legend>
                <?php
                    echo $this->Form->control('name');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
