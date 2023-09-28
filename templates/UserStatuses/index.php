<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\UserStatus> $userStatuses
 */
?>
<div class="userStatuses index content">
    <?= $this->Html->link(__('New User Status'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('User Statuses') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($userStatuses as $userStatus): ?>
                <tr>
                    <td><?= $this->Number->format($userStatus->id) ?></td>
                    <td><?= h($userStatus->name) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $userStatus->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $userStatus->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $userStatus->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userStatus->id)]) ?>
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
