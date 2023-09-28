<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UsersTree $usersTree
 * @var string[]|\Cake\Collection\CollectionInterface $users
 * @var string[]|\Cake\Collection\CollectionInterface $trees
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $usersTree->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $usersTree->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Users Trees'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="usersTrees form content">
            <?= $this->Form->create($usersTree) ?>
            <fieldset>
                <legend><?= __('Edit Users Tree') ?></legend>
                <?php
                    echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
                    echo $this->Form->control('tree_id', ['options' => $trees, 'empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
