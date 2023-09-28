<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\InvitationStatus $invitationStatus
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Invitation Status'), ['action' => 'edit', $invitationStatus->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Invitation Status'), ['action' => 'delete', $invitationStatus->id], ['confirm' => __('Are you sure you want to delete # {0}?', $invitationStatus->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Invitation Statuses'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Invitation Status'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="invitationStatuses view content">
            <h3><?= h($invitationStatus->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($invitationStatus->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($invitationStatus->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Invitations') ?></h4>
                <?php if (!empty($invitationStatus->invitations)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('First Name') ?></th>
                            <th><?= __('Last Name') ?></th>
                            <th><?= __('Email') ?></th>
                            <th><?= __('Subject') ?></th>
                            <th><?= __('Message') ?></th>
                            <th><?= __('Invitation Status Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Updated') ?></th>
                            <th><?= __('Recall') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($invitationStatus->invitations as $invitations) : ?>
                        <tr>
                            <td><?= h($invitations->id) ?></td>
                            <td><?= h($invitations->user_id) ?></td>
                            <td><?= h($invitations->first_name) ?></td>
                            <td><?= h($invitations->last_name) ?></td>
                            <td><?= h($invitations->email) ?></td>
                            <td><?= h($invitations->subject) ?></td>
                            <td><?= h($invitations->message) ?></td>
                            <td><?= h($invitations->invitation_status_id) ?></td>
                            <td><?= h($invitations->created) ?></td>
                            <td><?= h($invitations->updated) ?></td>
                            <td><?= h($invitations->recall) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Invitations', 'action' => 'view', $invitations->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Invitations', 'action' => 'edit', $invitations->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Invitations', 'action' => 'delete', $invitations->id], ['confirm' => __('Are you sure you want to delete # {0}?', $invitations->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
