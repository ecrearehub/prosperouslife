<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Invitation> $invitations
 */
?>
<div class="invitations index content">
    <?= $this->Html->link(__('New Invitation'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Invitations') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('first_name') ?></th>
                    <th><?= $this->Paginator->sort('last_name') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('invitation_status_id') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('updated') ?></th>
                    <th><?= $this->Paginator->sort('recall') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($invitations as $invitation): ?>
                <tr>
                    <td><?= $this->Number->format($invitation->id) ?></td>
                    <td><?= $invitation->has('user') ? $this->Html->link($invitation->user->id, ['controller' => 'Users', 'action' => 'view', $invitation->user->id]) : '' ?></td>
                    <td><?= h($invitation->first_name) ?></td>
                    <td><?= h($invitation->last_name) ?></td>
                    <td><?= h($invitation->email) ?></td>
                    <td><?= $invitation->has('invitation_status') ? $this->Html->link($invitation->invitation_status->name, ['controller' => 'InvitationStatuses', 'action' => 'view', $invitation->invitation_status->id]) : '' ?></td>
                    <td><?= h($invitation->created) ?></td>
                    <td><?= h($invitation->updated) ?></td>
                    <td><?= h($invitation->recall) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $invitation->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $invitation->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $invitation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $invitation->id)]) ?>
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
