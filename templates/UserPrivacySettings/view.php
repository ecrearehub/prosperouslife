<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UserPrivacySetting $userPrivacySetting
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit User Privacy Setting'), ['action' => 'edit', $userPrivacySetting->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete User Privacy Setting'), ['action' => 'delete', $userPrivacySetting->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userPrivacySetting->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List User Privacy Settings'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New User Privacy Setting'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="userPrivacySettings view content">
            <h3><?= h($userPrivacySetting->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $userPrivacySetting->has('user') ? $this->Html->link($userPrivacySetting->user->id, ['controller' => 'Users', 'action' => 'view', $userPrivacySetting->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($userPrivacySetting->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Updated') ?></th>
                    <td><?= h($userPrivacySetting->updated) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($userPrivacySetting->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Birthday') ?></th>
                    <td><?= $userPrivacySetting->birthday === null ? '' : $this->Number->format($userPrivacySetting->birthday) ?></td>
                </tr>
                <tr>
                    <th><?= __('Goals') ?></th>
                    <td><?= $userPrivacySetting->goals === null ? '' : $this->Number->format($userPrivacySetting->goals) ?></td>
                </tr>
                <tr>
                    <th><?= __('Skills') ?></th>
                    <td><?= $userPrivacySetting->skills === null ? '' : $this->Number->format($userPrivacySetting->skills) ?></td>
                </tr>
                <tr>
                    <th><?= __('Projects') ?></th>
                    <td><?= $userPrivacySetting->projects === null ? '' : $this->Number->format($userPrivacySetting->projects) ?></td>
                </tr>
                <tr>
                    <th><?= __('Legasy') ?></th>
                    <td><?= $userPrivacySetting->legasy === null ? '' : $this->Number->format($userPrivacySetting->legasy) ?></td>
                </tr>
                <tr>
                    <th><?= __('Trees') ?></th>
                    <td><?= $userPrivacySetting->trees === null ? '' : $this->Number->format($userPrivacySetting->trees) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= $userPrivacySetting->email === null ? '' : $this->Number->format($userPrivacySetting->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Phone') ?></th>
                    <td><?= $userPrivacySetting->phone === null ? '' : $this->Number->format($userPrivacySetting->phone) ?></td>
                </tr>
                <tr>
                    <th><?= __('Mobile') ?></th>
                    <td><?= $userPrivacySetting->mobile === null ? '' : $this->Number->format($userPrivacySetting->mobile) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
