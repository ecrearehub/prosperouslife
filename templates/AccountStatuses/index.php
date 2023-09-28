<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\AccountStatus> $accountStatuses
 */
?>
<div class="accountStatuses index content">
    <?= $this->Html->link(__('New Account Status'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Account Statuses') ?></h3>
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
                <?php foreach ($accountStatuses as $accountStatus): ?>
                <tr>
                    <td><?= $this->Number->format($accountStatus->id) ?></td>
                    <td><?= h($accountStatus->name) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $accountStatus->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $accountStatus->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $accountStatus->id], ['confirm' => __('Are you sure you want to delete # {0}?', $accountStatus->id)]) ?>
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
