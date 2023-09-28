<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Item> $items
 */
?>
<div class="items index content">
    <?= $this->Html->link(__('New Item'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Items') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('item_category_id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('price') ?></th>
                    <th><?= $this->Paginator->sort('tax') ?></th>
                    <th><?= $this->Paginator->sort('parts') ?></th>
                    <th><?= $this->Paginator->sort('item_status_id') ?></th>
                    <th><?= $this->Paginator->sort('item_type_id') ?></th>
                    <th><?= $this->Paginator->sort('sourcecode') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('updated') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($items as $item): ?>
                <tr>
                    <td><?= $this->Number->format($item->id) ?></td>
                    <td><?= $item->has('item_category') ? $this->Html->link($item->item_category->name, ['controller' => 'ItemCategories', 'action' => 'view', $item->item_category->id]) : '' ?></td>
                    <td><?= h($item->name) ?></td>
                    <td><?= $item->price === null ? '' : $this->Number->format($item->price) ?></td>
                    <td><?= $item->tax === null ? '' : $this->Number->format($item->tax) ?></td>
                    <td><?= $item->parts === null ? '' : $this->Number->format($item->parts) ?></td>
                    <td><?= $item->has('item_status') ? $this->Html->link($item->item_status->name, ['controller' => 'ItemStatuses', 'action' => 'view', $item->item_status->id]) : '' ?></td>
                    <td><?= $item->has('item_type') ? $this->Html->link($item->item_type->name, ['controller' => 'ItemTypes', 'action' => 'view', $item->item_type->id]) : '' ?></td>
                    <td><?= h($item->sourcecode) ?></td>
                    <td><?= h($item->created) ?></td>
                    <td><?= h($item->updated) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $item->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $item->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $item->id], ['confirm' => __('Are you sure you want to delete # {0}?', $item->id)]) ?>
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
