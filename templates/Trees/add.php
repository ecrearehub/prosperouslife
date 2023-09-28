<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tree $tree
 * @var \Cake\Collection\CollectionInterface|string[] $treeStatuses
 * @var \Cake\Collection\CollectionInterface|string[] $treeTypes
 * @var \Cake\Collection\CollectionInterface|string[] $treeKinds
 * @var \Cake\Collection\CollectionInterface|string[] $orders
 * @var \Cake\Collection\CollectionInterface|string[] $users
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Trees'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="trees form content">
            <?= $this->Form->create($tree) ?>
            <fieldset>
                <legend><?= __('Add Tree') ?></legend>
                <?php
                    echo $this->Form->control('tree_status_id', ['options' => $treeStatuses, 'empty' => true]);
                    echo $this->Form->control('tree_type_id', ['options' => $treeTypes, 'empty' => true]);
                    echo $this->Form->control('tree_kind_id', ['options' => $treeKinds, 'empty' => true]);
                    echo $this->Form->control('location');
                    echo $this->Form->control('orders._ids', ['options' => $orders]);
                    echo $this->Form->control('users._ids', ['options' => $users]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
