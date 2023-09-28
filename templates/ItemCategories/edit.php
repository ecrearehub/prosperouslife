<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ItemCategory $itemCategory
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $itemCategory->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $itemCategory->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Item Categories'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="itemCategories form content">
            <?= $this->Form->create($itemCategory) ?>
            <fieldset>
                <legend><?= __('Edit Item Category') ?></legend>
                <?php
                    echo $this->Form->control('name');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
