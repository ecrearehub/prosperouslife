<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\OrdersTree> $ordersTrees
 */
?>
<div class="ordersTrees index content">
    <?= $this->Html->link(__('New Orders Tree'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Orders Trees') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('order_id') ?></th>
                    <th><?= $this->Paginator->sort('tree_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($ordersTrees as $ordersTree): ?>
                <tr>
                    <td><?= $this->Number->format($ordersTree->id) ?></td>
                    <td><?= $ordersTree->has('order') ? $this->Html->link($ordersTree->order->id, ['controller' => 'Orders', 'action' => 'view', $ordersTree->order->id]) : '' ?></td>
                    <td><?= $ordersTree->has('tree') ? $this->Html->link($ordersTree->tree->id, ['controller' => 'Trees', 'action' => 'view', $ordersTree->tree->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $ordersTree->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ordersTree->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ordersTree->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ordersTree->id)]) ?>
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
