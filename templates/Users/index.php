<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\User> $users
 */
?>
<div class="users index content">
    <?= $this->Html->link(__('New User'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Users') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('parent_id') ?></th>
                    <th><?= $this->Paginator->sort('username') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('first_name') ?></th>
                    <th><?= $this->Paginator->sort('last_name') ?></th>
                    <th><?= $this->Paginator->sort('birthday') ?></th>
                    <th><?= $this->Paginator->sort('user_role_id') ?></th>
                    <th><?= $this->Paginator->sort('user_status_id') ?></th>
                    <th><?= $this->Paginator->sort('skype') ?></th>
                    <th><?= $this->Paginator->sort('phone') ?></th>
                    <th><?= $this->Paginator->sort('mobile') ?></th>
                    <th><?= $this->Paginator->sort('address') ?></th>
                    <th><?= $this->Paginator->sort('zip') ?></th>
                    <th><?= $this->Paginator->sort('city') ?></th>
                    <th><?= $this->Paginator->sort('country_id') ?></th>
                    <th><?= $this->Paginator->sort('code') ?></th>
                    <th><?= $this->Paginator->sort('activation') ?></th>
                    <th><?= $this->Paginator->sort('terms') ?></th>
                    <th><?= $this->Paginator->sort('complete') ?></th>
                    <th><?= $this->Paginator->sort('last_login') ?></th>
                    <th><?= $this->Paginator->sort('newsletter') ?></th>
                    <th><?= $this->Paginator->sort('tax_id') ?></th>
                    <th><?= $this->Paginator->sort('vat_id') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('updated') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= $this->Number->format($user->id) ?></td>
                    <td><?= $user->has('parent_user') ? $this->Html->link($user->parent_user->id, ['controller' => 'Users', 'action' => 'view', $user->parent_user->id]) : '' ?></td>
                    <td><?= h($user->username) ?></td>
                    <td><?= h($user->email) ?></td>
                    <td><?= h($user->first_name) ?></td>
                    <td><?= h($user->last_name) ?></td>
                    <td><?= h($user->birthday) ?></td>
                    <td><?= $user->has('user_role') ? $this->Html->link($user->user_role->name, ['controller' => 'UserRoles', 'action' => 'view', $user->user_role->id]) : '' ?></td>
                    <td><?= $user->has('user_status') ? $this->Html->link($user->user_status->name, ['controller' => 'UserStatuses', 'action' => 'view', $user->user_status->id]) : '' ?></td>
                    <td><?= h($user->skype) ?></td>
                    <td><?= h($user->phone) ?></td>
                    <td><?= h($user->mobile) ?></td>
                    <td><?= h($user->address) ?></td>
                    <td><?= h($user->zip) ?></td>
                    <td><?= h($user->city) ?></td>
                    <td><?= $user->has('country') ? $this->Html->link($user->country->name, ['controller' => 'Countries', 'action' => 'view', $user->country->id]) : '' ?></td>
                    <td><?= h($user->code) ?></td>
                    <td><?= $user->activation === null ? '' : $this->Number->format($user->activation) ?></td>
                    <td><?= $user->terms === null ? '' : $this->Number->format($user->terms) ?></td>
                    <td><?= $user->complete === null ? '' : $this->Number->format($user->complete) ?></td>
                    <td><?= h($user->last_login) ?></td>
                    <td><?= $this->Number->format($user->newsletter) ?></td>
                    <td><?= h($user->tax_id) ?></td>
                    <td><?= h($user->vat_id) ?></td>
                    <td><?= h($user->created) ?></td>
                    <td><?= h($user->updated) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $user->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
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
