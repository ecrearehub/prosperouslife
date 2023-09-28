<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\UsersTree> $usersTrees
 */
?>
<div class="usersTrees index content">
    <?= $this->Html->link(__('New Users Tree'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Users Trees') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('tree_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($usersTrees as $usersTree): ?>
                <tr>
                    <td><?= $this->Number->format($usersTree->id) ?></td>
                    <td><?= $usersTree->has('user') ? $this->Html->link($usersTree->user->id, ['controller' => 'Users', 'action' => 'view', $usersTree->user->id]) : '' ?></td>
                    <td><?= $usersTree->has('tree') ? $this->Html->link($usersTree->tree->id, ['controller' => 'Trees', 'action' => 'view', $usersTree->tree->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $usersTree->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $usersTree->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $usersTree->id], ['confirm' => __('Are you sure you want to delete # {0}?', $usersTree->id)]) ?>
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
