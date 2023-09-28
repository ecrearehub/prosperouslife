<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\LanguageStatus> $languageStatuses
 */
?>
<div class="languageStatuses index content">
    <?= $this->Html->link(__('New Language Status'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Language Statuses') ?></h3>
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
                <?php foreach ($languageStatuses as $languageStatus): ?>
                <tr>
                    <td><?= $this->Number->format($languageStatus->id) ?></td>
                    <td><?= h($languageStatus->name) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $languageStatus->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $languageStatus->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $languageStatus->id], ['confirm' => __('Are you sure you want to delete # {0}?', $languageStatus->id)]) ?>
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
