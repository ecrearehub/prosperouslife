<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UsersGoal $usersGoal
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Users Goal'), ['action' => 'edit', $usersGoal->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Users Goal'), ['action' => 'delete', $usersGoal->id], ['confirm' => __('Are you sure you want to delete # {0}?', $usersGoal->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Users Goals'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Users Goal'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="usersGoals view content">
            <h3><?= h($usersGoal->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $usersGoal->has('user') ? $this->Html->link($usersGoal->user->id, ['controller' => 'Users', 'action' => 'view', $usersGoal->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Goal') ?></th>
                    <td><?= $usersGoal->has('goal') ? $this->Html->link($usersGoal->goal->name, ['controller' => 'Goals', 'action' => 'view', $usersGoal->goal->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($usersGoal->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
