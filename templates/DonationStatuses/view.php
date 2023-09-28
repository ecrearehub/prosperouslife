<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DonationStatus $donationStatus
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Donation Status'), ['action' => 'edit', $donationStatus->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Donation Status'), ['action' => 'delete', $donationStatus->id], ['confirm' => __('Are you sure you want to delete # {0}?', $donationStatus->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Donation Statuses'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Donation Status'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="donationStatuses view content">
            <h3><?= h($donationStatus->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($donationStatus->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($donationStatus->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Donations') ?></h4>
                <?php if (!empty($donationStatus->donations)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Project Id') ?></th>
                            <th><?= __('Amount') ?></th>
                            <th><?= __('Donation Status Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Updated') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($donationStatus->donations as $donations) : ?>
                        <tr>
                            <td><?= h($donations->id) ?></td>
                            <td><?= h($donations->user_id) ?></td>
                            <td><?= h($donations->project_id) ?></td>
                            <td><?= h($donations->amount) ?></td>
                            <td><?= h($donations->donation_status_id) ?></td>
                            <td><?= h($donations->created) ?></td>
                            <td><?= h($donations->updated) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Donations', 'action' => 'view', $donations->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Donations', 'action' => 'edit', $donations->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Donations', 'action' => 'delete', $donations->id], ['confirm' => __('Are you sure you want to delete # {0}?', $donations->id)]) ?>
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
