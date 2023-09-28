<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OrdersItem $ordersItem
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Orders Item'), ['action' => 'edit', $ordersItem->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Orders Item'), ['action' => 'delete', $ordersItem->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ordersItem->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Orders Items'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Orders Item'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="ordersItems view content">
            <h3><?= h($ordersItem->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Order') ?></th>
                    <td><?= $ordersItem->has('order') ? $this->Html->link($ordersItem->order->id, ['controller' => 'Orders', 'action' => 'view', $ordersItem->order->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Item') ?></th>
                    <td><?= $ordersItem->has('item') ? $this->Html->link($ordersItem->item->name, ['controller' => 'Items', 'action' => 'view', $ordersItem->item->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($ordersItem->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
