<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ItemStatus $itemStatus
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Item Status'), ['action' => 'edit', $itemStatus->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Item Status'), ['action' => 'delete', $itemStatus->id], ['confirm' => __('Are you sure you want to delete # {0}?', $itemStatus->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Item Statuses'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Item Status'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="itemStatuses view content">
            <h3><?= h($itemStatus->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($itemStatus->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($itemStatus->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Items') ?></h4>
                <?php if (!empty($itemStatus->items)) : ?>
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
                        <?php foreach ($itemStatus->items as $items) : ?>
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
        </div>
    </div>
</div>