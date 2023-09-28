<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Operation $operation
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Operation'), ['action' => 'edit', $operation->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Operation'), ['action' => 'delete', $operation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $operation->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Operations'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Operation'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="operations view content">
            <h3><?= h($operation->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Connection') ?></th>
                    <td><?= $operation->has('connection') ? $this->Html->link($operation->connection->name, ['controller' => 'Connections', 'action' => 'view', $operation->connection->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Sourceid') ?></th>
                    <td><?= h($operation->sourceid) ?></td>
                </tr>
                <tr>
                    <th><?= __('Content') ?></th>
                    <td><?= h($operation->content) ?></td>
                </tr>
                <tr>
                    <th><?= __('Operation Status') ?></th>
                    <td><?= $operation->has('operation_status') ? $this->Html->link($operation->operation_status->name, ['controller' => 'OperationStatuses', 'action' => 'view', $operation->operation_status->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Operation Type') ?></th>
                    <td><?= $operation->has('operation_type') ? $this->Html->link($operation->operation_type->name, ['controller' => 'OperationTypes', 'action' => 'view', $operation->operation_type->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($operation->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Updated') ?></th>
                    <td><?= h($operation->updated) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($operation->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Donations') ?></h4>
                <?php if (!empty($operation->donations)) : ?>
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
                        <?php foreach ($operation->donations as $donations) : ?>
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
            <div class="related">
                <h4><?= __('Related Issues') ?></h4>
                <?php if (!empty($operation->issues)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Operation Id') ?></th>
                            <th><?= __('Content') ?></th>
                            <th><?= __('Message') ?></th>
                            <th><?= __('Issue Status Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Updated') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($operation->issues as $issues) : ?>
                        <tr>
                            <td><?= h($issues->id) ?></td>
                            <td><?= h($issues->operation_id) ?></td>
                            <td><?= h($issues->content) ?></td>
                            <td><?= h($issues->message) ?></td>
                            <td><?= h($issues->issue_status_id) ?></td>
                            <td><?= h($issues->created) ?></td>
                            <td><?= h($issues->updated) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Issues', 'action' => 'view', $issues->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Issues', 'action' => 'edit', $issues->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Issues', 'action' => 'delete', $issues->id], ['confirm' => __('Are you sure you want to delete # {0}?', $issues->id)]) ?>
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
