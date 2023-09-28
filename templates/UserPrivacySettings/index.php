<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\UserPrivacySetting> $userPrivacySettings
 */
?>
<div class="userPrivacySettings index content">
    <?= $this->Html->link(__('New User Privacy Setting'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('User Privacy Settings') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('birthday') ?></th>
                    <th><?= $this->Paginator->sort('goals') ?></th>
                    <th><?= $this->Paginator->sort('skills') ?></th>
                    <th><?= $this->Paginator->sort('projects') ?></th>
                    <th><?= $this->Paginator->sort('legasy') ?></th>
                    <th><?= $this->Paginator->sort('trees') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('phone') ?></th>
                    <th><?= $this->Paginator->sort('mobile') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('updated') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($userPrivacySettings as $userPrivacySetting): ?>
                <tr>
                    <td><?= $this->Number->format($userPrivacySetting->id) ?></td>
                    <td><?= $userPrivacySetting->has('user') ? $this->Html->link($userPrivacySetting->user->id, ['controller' => 'Users', 'action' => 'view', $userPrivacySetting->user->id]) : '' ?></td>
                    <td><?= $userPrivacySetting->birthday === null ? '' : $this->Number->format($userPrivacySetting->birthday) ?></td>
                    <td><?= $userPrivacySetting->goals === null ? '' : $this->Number->format($userPrivacySetting->goals) ?></td>
                    <td><?= $userPrivacySetting->skills === null ? '' : $this->Number->format($userPrivacySetting->skills) ?></td>
                    <td><?= $userPrivacySetting->projects === null ? '' : $this->Number->format($userPrivacySetting->projects) ?></td>
                    <td><?= $userPrivacySetting->legasy === null ? '' : $this->Number->format($userPrivacySetting->legasy) ?></td>
                    <td><?= $userPrivacySetting->trees === null ? '' : $this->Number->format($userPrivacySetting->trees) ?></td>
                    <td><?= $userPrivacySetting->email === null ? '' : $this->Number->format($userPrivacySetting->email) ?></td>
                    <td><?= $userPrivacySetting->phone === null ? '' : $this->Number->format($userPrivacySetting->phone) ?></td>
                    <td><?= $userPrivacySetting->mobile === null ? '' : $this->Number->format($userPrivacySetting->mobile) ?></td>
                    <td><?= h($userPrivacySetting->created) ?></td>
                    <td><?= h($userPrivacySetting->updated) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $userPrivacySetting->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $userPrivacySetting->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $userPrivacySetting->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userPrivacySetting->id)]) ?>
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
