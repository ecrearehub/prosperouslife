<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Donation $donation
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Donation'), ['action' => 'edit', $donation->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Donation'), ['action' => 'delete', $donation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $donation->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Donations'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Donation'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="donations view content">
            <h3><?= h($donation->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $donation->has('user') ? $this->Html->link($donation->user->id, ['controller' => 'Users', 'action' => 'view', $donation->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Project') ?></th>
                    <td><?= $donation->has('project') ? $this->Html->link($donation->project->name, ['controller' => 'Projects', 'action' => 'view', $donation->project->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Donation Status') ?></th>
                    <td><?= $donation->has('donation_status') ? $this->Html->link($donation->donation_status->name, ['controller' => 'DonationStatuses', 'action' => 'view', $donation->donation_status->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($donation->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Updated') ?></th>
                    <td><?= h($donation->updated) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($donation->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Amount') ?></th>
                    <td><?= $donation->amount === null ? '' : $this->Number->format($donation->amount) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Operations') ?></h4>
                <?php if (!empty($donation->operations)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Connection Id') ?></th>
                            <th><?= __('Sourceid') ?></th>
                            <th><?= __('Content') ?></th>
                            <th><?= __('Operation Status Id') ?></th>
                            <th><?= __('Operation Type Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Updated') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($donation->operations as $operations) : ?>
                        <tr>
                            <td><?= h($operations->id) ?></td>
                            <td><?= h($operations->connection_id) ?></td>
                            <td><?= h($operations->sourceid) ?></td>
                            <td><?= h($operations->content) ?></td>
                            <td><?= h($operations->operation_status_id) ?></td>
                            <td><?= h($operations->operation_type_id) ?></td>
                            <td><?= h($operations->created) ?></td>
                            <td><?= h($operations->updated) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Operations', 'action' => 'view', $operations->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Operations', 'action' => 'edit', $operations->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Operations', 'action' => 'delete', $operations->id], ['confirm' => __('Are you sure you want to delete # {0}?', $operations->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Donations Conections') ?></h4>
                <?php if (!empty($donation->donations_conections)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Donation Id') ?></th>
                            <th><?= __('Connection Id') ?></th>
                            <th><?= __('Sourceid') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($donation->donations_conections as $donationsConections) : ?>
                        <tr>
                            <td><?= h($donationsConections->id) ?></td>
                            <td><?= h($donationsConections->donation_id) ?></td>
                            <td><?= h($donationsConections->connection_id) ?></td>
                            <td><?= h($donationsConections->sourceid) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'DonationsConections', 'action' => 'view', $donationsConections->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'DonationsConections', 'action' => 'edit', $donationsConections->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'DonationsConections', 'action' => 'delete', $donationsConections->id], ['confirm' => __('Are you sure you want to delete # {0}?', $donationsConections->id)]) ?>
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
