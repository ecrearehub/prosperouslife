<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\ItemCategory> $itemCategories
 */
?>
<div class="itemCategories index content">
    <?= $this->Html->link(__('New Item Category'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Item Categories') ?></h3>
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
                <?php foreach ($itemCategories as $itemCategory): ?>
                <tr>
                    <td><?= $this->Number->format($itemCategory->id) ?></td>
                    <td><?= h($itemCategory->name) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $itemCategory->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $itemCategory->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $itemCategory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $itemCategory->id)]) ?>
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
