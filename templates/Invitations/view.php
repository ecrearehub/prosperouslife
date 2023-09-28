<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Invitation $invitation
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Invitation'), ['action' => 'edit', $invitation->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Invitation'), ['action' => 'delete', $invitation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $invitation->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Invitations'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Invitation'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="invitations view content">
            <h3><?= h($invitation->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $invitation->has('user') ? $this->Html->link($invitation->user->id, ['controller' => 'Users', 'action' => 'view', $invitation->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('First Name') ?></th>
                    <td><?= h($invitation->first_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Last Name') ?></th>
                    <td><?= h($invitation->last_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($invitation->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Invitation Status') ?></th>
                    <td><?= $invitation->has('invitation_status') ? $this->Html->link($invitation->invitation_status->name, ['controller' => 'InvitationStatuses', 'action' => 'view', $invitation->invitation_status->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($invitation->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Updated') ?></th>
                    <td><?= h($invitation->updated) ?></td>
                </tr>
                <tr>
                    <th><?= __('Recall') ?></th>
                    <td><?= h($invitation->recall) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($invitation->id) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Subject') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($invitation->subject)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Message') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($invitation->message)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
