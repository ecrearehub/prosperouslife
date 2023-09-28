<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OrdersTree $ordersTree
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Orders Tree'), ['action' => 'edit', $ordersTree->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Orders Tree'), ['action' => 'delete', $ordersTree->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ordersTree->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Orders Trees'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Orders Tree'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="ordersTrees view content">
            <h3><?= h($ordersTree->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Order') ?></th>
                    <td><?= $ordersTree->has('order') ? $this->Html->link($ordersTree->order->id, ['controller' => 'Orders', 'action' => 'view', $ordersTree->order->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Tree') ?></th>
                    <td><?= $ordersTree->has('tree') ? $this->Html->link($ordersTree->tree->id, ['controller' => 'Trees', 'action' => 'view', $ordersTree->tree->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($ordersTree->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
