<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\UsersGoal> $usersGoals
 */
?>
<div class="usersGoals index content">
    <?= $this->Html->link(__('New Users Goal'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Users Goals') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('goal_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($usersGoals as $usersGoal): ?>
                <tr>
                    <td><?= $this->Number->format($usersGoal->id) ?></td>
                    <td><?= $usersGoal->has('user') ? $this->Html->link($usersGoal->user->id, ['controller' => 'Users', 'action' => 'view', $usersGoal->user->id]) : '' ?></td>
                    <td><?= $usersGoal->has('goal') ? $this->Html->link($usersGoal->goal->name, ['controller' => 'Goals', 'action' => 'view', $usersGoal->goal->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $usersGoal->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $usersGoal->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $usersGoal->id], ['confirm' => __('Are you sure you want to delete # {0}?', $usersGoal->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
