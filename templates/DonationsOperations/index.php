<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\DonationsOperation> $donationsOperations
 */
?>
<div class="donationsOperations index content">
    <?= $this->Html->link(__('New Donations Operation'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Donations Operations') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('donation_id') ?></th>
                    <th><?= $this->Paginator->sort('operation_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($donationsOperations as $donationsOperation): ?>
                <tr>
                    <td><?= $this->Number->format($donationsOperation->id) ?></td>
                    <td><?= $donationsOperation->has('donation') ? $this->Html->link($donationsOperation->donation->id, ['controller' => 'Donations', 'action' => 'view', $donationsOperation->donation->id]) : '' ?></td>
                    <td><?= $donationsOperation->has('operation') ? $this->Html->link($donationsOperation->operation->id, ['controller' => 'Operations', 'action' => 'view', $donationsOperation->operation->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $donationsOperation->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $donationsOperation->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $donationsOperation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $donationsOperation->id)]) ?>
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
