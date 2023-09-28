<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Goal $goal
 * @var string[]|\Cake\Collection\CollectionInterface $users
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $goal->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $goal->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Goals'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="goals form content">
            <?= $this->Form->create($goal) ?>
            <fieldset>
                <legend><?= __('Edit Goal') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('comment');
                    echo $this->Form->control('description');
                    echo $this->Form->control('url');
                    echo $this->Form->control('sort');
                    echo $this->Form->control('users');
                    echo $this->Form->control('projects');
                    echo $this->Form->control('clicks');
                    echo $this->Form->control('users._ids', ['options' => $users]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
