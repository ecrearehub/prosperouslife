<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\ConferenceType> $conferenceTypes
 */
?>
<div class="conferenceTypes index content">
    <?= $this->Html->link(__('New Conference Type'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Conference Types') ?></h3>
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
                <?php foreach ($conferenceTypes as $conferenceType): ?>
                <tr>
                    <td><?= $this->Number->format($conferenceType->id) ?></td>
                    <td><?= h($conferenceType->name) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $conferenceType->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $conferenceType->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $conferenceType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $conferenceType->id)]) ?>
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
