<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Order $order
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Order'), ['action' => 'edit', $order->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Order'), ['action' => 'delete', $order->id], ['confirm' => __('Are you sure you want to delete # {0}?', $order->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Orders'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Order'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="orders view content">
            <h3><?= h($order->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $order->has('user') ? $this->Html->link($order->user->id, ['controller' => 'Users', 'action' => 'view', $order->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Order Status') ?></th>
                    <td><?= $order->has('order_status') ? $this->Html->link($order->order_status->name, ['controller' => 'OrderStatuses', 'action' => 'view', $order->order_status->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($order->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Updated') ?></th>
                    <td><?= h($order->updated) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($order->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Amount') ?></th>
                    <td><?= $order->amount === null ? '' : $this->Number->format($order->amount) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Items') ?></h4>
                <?php if (!empty($order->items)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Item Category Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Short Description') ?></th>
                            <th><?= __('Description') ?></th>
                            <th><?= __('Price') ?></th>
                            <th><?= __('Tax') ?></th>
                            <th><?= __('Parts') ?></th>
                            <th><?= __('Item Status Id') ?></th>
                            <th><?= __('Item Type Id') ?></th>
                            <th><?= __('Sourcecode') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Updated') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($order->items as $items) : ?>
                        <tr>
                            <td><?= h($items->id) ?></td>
                            <td><?= h($items->item_category_id) ?></td>
                            <td><?= h($items->name) ?></td>
                            <td><?= h($items->short_description) ?></td>
                            <td><?= h($items->description) ?></td>
                            <td><?= h($items->price) ?></td>
                            <td><?= h($items->tax) ?></td>
                            <td><?= h($items->parts) ?></td>
                            <td><?= h($items->item_status_id) ?></td>
                            <td><?= h($items->item_type_id) ?></td>
                            <td><?= h($items->sourcecode) ?></td>
                            <td><?= h($items->created) ?></td>
                            <td><?= h($items->updated) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Items', 'action' => 'view', $items->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Items', 'action' => 'edit', $items->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Items', 'action' => 'delete', $items->id], ['confirm' => __('Are you sure you want to delete # {0}?', $items->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Trees') ?></h4>
                <?php if (!empty($order->trees)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Tree Status Id') ?></th>
                            <th><?= __('Tree Type Id') ?></th>
                            <th><?= __('Tree Kind Id') ?></th>
                            <th><?= __('Location') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Updated') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($order->trees as $trees) : ?>
                        <tr>
                            <td><?= h($trees->id) ?></td>
                            <td><?= h($trees->tree_status_id) ?></td>
                            <td><?= h($trees->tree_type_id) ?></td>
                            <td><?= h($trees->tree_kind_id) ?></td>
                            <td><?= h($trees->location) ?></td>
                            <td><?= h($trees->created) ?></td>
                            <td><?= h($trees->updated) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Trees', 'action' => 'view', $trees->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Trees', 'action' => 'edit', $trees->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Trees', 'action' => 'delete', $trees->id], ['confirm' => __('Are you sure you want to delete # {0}?', $trees->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Order Notes') ?></h4>
                <?php if (!empty($order->order_notes)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Order Id') ?></th>
                            <th><?= __('Note') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Updated') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($order->order_notes as $orderNotes) : ?>
                        <tr>
                            <td><?= h($orderNotes->id) ?></td>
                            <td><?= h($orderNotes->order_id) ?></td>
                            <td><?= h($orderNotes->note) ?></td>
                            <td><?= h($orderNotes->created) ?></td>
                            <td><?= h($orderNotes->updated) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'OrderNotes', 'action' => 'view', $orderNotes->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'OrderNotes', 'action' => 'edit', $orderNotes->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'OrderNotes', 'action' => 'delete', $orderNotes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $orderNotes->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
