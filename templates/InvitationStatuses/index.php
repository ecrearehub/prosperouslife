<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\InvitationStatus> $invitationStatuses
 */
?>
<div class="invitationStatuses index content">
    <?= $this->Html->link(__('New Invitation Status'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Invitation Statuses') ?></h3>
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
                <?php foreach ($invitationStatuses as $invitationStatus): ?>
                <tr>
                    <td><?= $this->Number->format($invitationStatus->id) ?></td>
                    <td><?= h($invitationStatus->name) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $invitationStatus->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $invitationStatus->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $invitationStatus->id], ['confirm' => __('Are you sure you want to delete # {0}?', $invitationStatus->id)]) ?>
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
