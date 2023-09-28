<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Conference> $conferences
 */
?>
<div class="conferences index content">
    <?= $this->Html->link(__('New Conference'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Conferences') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('language_id') ?></th>
                    <th><?= $this->Paginator->sort('date') ?></th>
                    <th><?= $this->Paginator->sort('url') ?></th>
                    <th><?= $this->Paginator->sort('conference_timezone_id') ?></th>
                    <th><?= $this->Paginator->sort('counter') ?></th>
                    <th><?= $this->Paginator->sort('conference_type_id') ?></th>
                    <th><?= $this->Paginator->sort('conference_status_id') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('updated') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($conferences as $conference): ?>
                <tr>
                    <td><?= $this->Number->format($conference->id) ?></td>
                    <td><?= $conference->has('language') ? $this->Html->link($conference->language->name, ['controller' => 'Languages', 'action' => 'view', $conference->language->id]) : '' ?></td>
                    <td><?= h($conference->date) ?></td>
                    <td><?= h($conference->url) ?></td>
                    <td><?= $conference->has('conference_timezone') ? $this->Html->link($conference->conference_timezone->name, ['controller' => 'ConferenceTimezones', 'action' => 'view', $conference->conference_timezone->id]) : '' ?></td>
                    <td><?= $conference->counter === null ? '' : $this->Number->format($conference->counter) ?></td>
                    <td><?= $conference->has('conference_type') ? $this->Html->link($conference->conference_type->name, ['controller' => 'ConferenceTypes', 'action' => 'view', $conference->conference_type->id]) : '' ?></td>
                    <td><?= $conference->has('conference_status') ? $this->Html->link($conference->conference_status->name, ['controller' => 'ConferenceStatuses', 'action' => 'view', $conference->conference_status->id]) : '' ?></td>
                    <td><?= h($conference->created) ?></td>
                    <td><?= h($conference->updated) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $conference->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $conference->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $conference->id], ['confirm' => __('Are you sure you want to delete # {0}?', $conference->id)]) ?>
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
