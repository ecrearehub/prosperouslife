<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\UsersLanguage> $usersLanguages
 */
?>
<div class="usersLanguages index content">
    <?= $this->Html->link(__('New Users Language'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Users Languages') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('language_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($usersLanguages as $usersLanguage): ?>
                <tr>
                    <td><?= $this->Number->format($usersLanguage->id) ?></td>
                    <td><?= $usersLanguage->has('user') ? $this->Html->link($usersLanguage->user->id, ['controller' => 'Users', 'action' => 'view', $usersLanguage->user->id]) : '' ?></td>
                    <td><?= $usersLanguage->has('language') ? $this->Html->link($usersLanguage->language->name, ['controller' => 'Languages', 'action' => 'view', $usersLanguage->language->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $usersLanguage->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $usersLanguage->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $usersLanguage->id], ['confirm' => __('Are you sure you want to delete # {0}?', $usersLanguage->id)]) ?>
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
