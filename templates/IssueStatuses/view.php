<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\IssueStatus $issueStatus
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Issue Status'), ['action' => 'edit', $issueStatus->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Issue Status'), ['action' => 'delete', $issueStatus->id], ['confirm' => __('Are you sure you want to delete # {0}?', $issueStatus->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Issue Statuses'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Issue Status'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="issueStatuses view content">
            <h3><?= h($issueStatus->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($issueStatus->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($issueStatus->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Issues') ?></h4>
                <?php if (!empty($issueStatus->issues)) : ?>
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
                        <?php foreach ($issueStatus->issues as $issues) : ?>
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
