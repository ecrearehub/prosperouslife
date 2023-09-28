<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tree $tree
 * @var string[]|\Cake\Collection\CollectionInterface $treeStatuses
 * @var string[]|\Cake\Collection\CollectionInterface $treeTypes
 * @var string[]|\Cake\Collection\CollectionInterface $treeKinds
 * @var string[]|\Cake\Collection\CollectionInterface $orders
 * @var string[]|\Cake\Collection\CollectionInterface $users
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $tree->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $tree->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Trees'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="trees form content">
            <?= $this->Form->create($tree) ?>
            <fieldset>
                <legend><?= __('Edit Tree') ?></legend>
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
