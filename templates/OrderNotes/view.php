<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OrderNote $orderNote
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Order Note'), ['action' => 'edit', $orderNote->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Order Note'), ['action' => 'delete', $orderNote->id], ['confirm' => __('Are you sure you want to delete # {0}?', $orderNote->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Order Notes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Order Note'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="orderNotes view content">
            <h3><?= h($orderNote->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Order') ?></th>
                    <td><?= $orderNote->has('order') ? $this->Html->link($orderNote->order->id, ['controller' => 'Orders', 'action' => 'view', $orderNote->order->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Note') ?></th>
                    <td><?= h($orderNote->note) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($orderNote->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Updated') ?></th>
                    <td><?= h($orderNote->updated) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($orderNote->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
