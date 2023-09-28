<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OrdersTree $ordersTree
 * @var string[]|\Cake\Collection\CollectionInterface $orders
 * @var string[]|\Cake\Collection\CollectionInterface $trees
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $ordersTree->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $ordersTree->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Orders Trees'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="ordersTrees form content">
            <?= $this->Form->create($ordersTree) ?>
            <fieldset>
                <legend><?= __('Edit Orders Tree') ?></legend>
                <?php
                    echo $this->Form->control('order_id', ['options' => $orders, 'empty' => true]);
                    echo $this->Form->control('tree_id', ['options' => $trees, 'empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
