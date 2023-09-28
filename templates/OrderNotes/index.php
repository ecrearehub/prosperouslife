<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\OrderNote> $orderNotes
 */
?>
<div class="orderNotes index content">
    <?= $this->Html->link(__('New Order Note'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Order Notes') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('order_id') ?></th>
                    <th><?= $this->Paginator->sort('note') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('updated') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($orderNotes as $orderNote): ?>
                <tr>
                    <td><?= $this->Number->format($orderNote->id) ?></td>
                    <td><?= $orderNote->has('order') ? $this->Html->link($orderNote->order->id, ['controller' => 'Orders', 'action' => 'view', $orderNote->order->id]) : '' ?></td>
                    <td><?= h($orderNote->note) ?></td>
                    <td><?= h($orderNote->created) ?></td>
                    <td><?= h($orderNote->updated) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $orderNote->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $orderNote->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $orderNote->id], ['confirm' => __('Are you sure you want to delete # {0}?', $orderNote->id)]) ?>
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
