<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Connection $connection
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Connection'), ['action' => 'edit', $connection->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Connection'), ['action' => 'delete', $connection->id], ['confirm' => __('Are you sure you want to delete # {0}?', $connection->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Connections'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Connection'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="connections view content">
            <h3><?= h($connection->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($connection->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($connection->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Donations Conections') ?></h4>
                <?php if (!empty($connection->donations_conections)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Donation Id') ?></th>
                            <th><?= __('Connection Id') ?></th>
                            <th><?= __('Sourceid') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($connection->donations_conections as $donationsConections) : ?>
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
            <div class="related">
                <h4><?= __('Related Operations') ?></h4>
                <?php if (!empty($connection->operations)) : ?>
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
                        <?php foreach ($connection->operations as $operations) : ?>
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
        </div>
    </div>
</div>
