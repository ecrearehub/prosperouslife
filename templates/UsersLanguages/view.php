<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UsersLanguage $usersLanguage
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Users Language'), ['action' => 'edit', $usersLanguage->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Users Language'), ['action' => 'delete', $usersLanguage->id], ['confirm' => __('Are you sure you want to delete # {0}?', $usersLanguage->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Users Languages'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Users Language'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="usersLanguages view content">
            <h3><?= h($usersLanguage->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $usersLanguage->has('user') ? $this->Html->link($usersLanguage->user->id, ['controller' => 'Users', 'action' => 'view', $usersLanguage->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Language') ?></th>
                    <td><?= $usersLanguage->has('language') ? $this->Html->link($usersLanguage->language->name, ['controller' => 'Languages', 'action' => 'view', $usersLanguage->language->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($usersLanguage->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
