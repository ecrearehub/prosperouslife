<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UsersTree $usersTree
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Users Tree'), ['action' => 'edit', $usersTree->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Users Tree'), ['action' => 'delete', $usersTree->id], ['confirm' => __('Are you sure you want to delete # {0}?', $usersTree->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Users Trees'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Users Tree'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="usersTrees view content">
            <h3><?= h($usersTree->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $usersTree->has('user') ? $this->Html->link($usersTree->user->id, ['controller' => 'Users', 'action' => 'view', $usersTree->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Tree') ?></th>
                    <td><?= $usersTree->has('tree') ? $this->Html->link($usersTree->tree->id, ['controller' => 'Trees', 'action' => 'view', $usersTree->tree->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($usersTree->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
