<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UsersGoal $usersGoal
 * @var string[]|\Cake\Collection\CollectionInterface $users
 * @var string[]|\Cake\Collection\CollectionInterface $goals
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $usersGoal->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $usersGoal->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Users Goals'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="usersGoals form content">
            <?= $this->Form->create($usersGoal) ?>
            <fieldset>
                <legend><?= __('Edit Users Goal') ?></legend>
                <?php
                    echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
                    echo $this->Form->control('goal_id', ['options' => $goals, 'empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
