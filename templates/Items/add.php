<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Item $item
 * @var \Cake\Collection\CollectionInterface|string[] $itemCategories
 * @var \Cake\Collection\CollectionInterface|string[] $itemStatuses
 * @var \Cake\Collection\CollectionInterface|string[] $itemTypes
 * @var \Cake\Collection\CollectionInterface|string[] $orders
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Items'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="items form content">
            <?= $this->Form->create($item) ?>
            <fieldset>
                <legend><?= __('Add Item') ?></legend>
                <?php
                    echo $this->Form->control('item_category_id', ['options' => $itemCategories, 'empty' => true]);
                    echo $this->Form->control('name');
                    echo $this->Form->control('short_description');
                    echo $this->Form->control('description');
                    echo $this->Form->control('price');
                    echo $this->Form->control('tax');
                    echo $this->Form->control('parts');
                    echo $this->Form->control('item_status_id', ['options' => $itemStatuses, 'empty' => true]);
                    echo $this->Form->control('item_type_id', ['options' => $itemTypes, 'empty' => true]);
                    echo $this->Form->control('sourcecode');
                    echo $this->Form->control('orders._ids', ['options' => $orders]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
