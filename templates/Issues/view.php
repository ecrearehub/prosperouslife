<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Issue $issue
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Issue'), ['action' => 'edit', $issue->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Issue'), ['action' => 'delete', $issue->id], ['confirm' => __('Are you sure you want to delete # {0}?', $issue->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Issues'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Issue'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="issues view content">
            <h3><?= h($issue->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Operation') ?></th>
                    <td><?= $issue->has('operation') ? $this->Html->link($issue->operation->id, ['controller' => 'Operations', 'action' => 'view', $issue->operation->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Content') ?></th>
                    <td><?= h($issue->content) ?></td>
                </tr>
                <tr>
                    <th><?= __('Message') ?></th>
                    <td><?= h($issue->message) ?></td>
                </tr>
                <tr>
                    <th><?= __('Issue Status') ?></th>
                    <td><?= $issue->has('issue_status') ? $this->Html->link($issue->issue_status->name, ['controller' => 'IssueStatuses', 'action' => 'view', $issue->issue_status->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($issue->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Updated') ?></th>
                    <td><?= h($issue->updated) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($issue->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
