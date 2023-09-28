<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\DonationStatus> $donationStatuses
 */
?>
<div class="donationStatuses index content">
    <?= $this->Html->link(__('New Donation Status'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Donation Statuses') ?></h3>
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
                <?php foreach ($donationStatuses as $donationStatus): ?>
                <tr>
                    <td><?= $this->Number->format($donationStatus->id) ?></td>
                    <td><?= h($donationStatus->name) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $donationStatus->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $donationStatus->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $donationStatus->id], ['confirm' => __('Are you sure you want to delete # {0}?', $donationStatus->id)]) ?>
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
