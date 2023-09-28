<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OrderNote $orderNote
 * @var string[]|\Cake\Collection\CollectionInterface $orders
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $orderNote->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $orderNote->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Order Notes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="orderNotes form content">
            <?= $this->Form->create($orderNote) ?>
            <fieldset>
                <legend><?= __('Edit Order Note') ?></legend>
                <?php
                    echo $this->Form->control('order_id', ['options' => $orders, 'empty' => true]);
                    echo $this->Form->control('note');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
