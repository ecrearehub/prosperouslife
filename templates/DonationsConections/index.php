<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\DonationsConection> $donationsConections
 */
?>
<div class="donationsConections index content">
    <?= $this->Html->link(__('New Donations Conection'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Donations Conections') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('donation_id') ?></th>
                    <th><?= $this->Paginator->sort('connection_id') ?></th>
                    <th><?= $this->Paginator->sort('sourceid') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($donationsConections as $donationsConection): ?>
                <tr>
                    <td><?= $this->Number->format($donationsConection->id) ?></td>
                    <td><?= $donationsConection->has('donation') ? $this->Html->link($donationsConection->donation->id, ['controller' => 'Donations', 'action' => 'view', $donationsConection->donation->id]) : '' ?></td>
                    <td><?= $donationsConection->has('connection') ? $this->Html->link($donationsConection->connection->name, ['controller' => 'Connections', 'action' => 'view', $donationsConection->connection->id]) : '' ?></td>
                    <td><?= h($donationsConection->sourceid) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $donationsConection->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $donationsConection->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $donationsConection->id], ['confirm' => __('Are you sure you want to delete # {0}?', $donationsConection->id)]) ?>
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
