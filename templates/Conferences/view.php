<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Conference $conference
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Conference'), ['action' => 'edit', $conference->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Conference'), ['action' => 'delete', $conference->id], ['confirm' => __('Are you sure you want to delete # {0}?', $conference->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Conferences'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Conference'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="conferences view content">
            <h3><?= h($conference->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Language') ?></th>
                    <td><?= $conference->has('language') ? $this->Html->link($conference->language->name, ['controller' => 'Languages', 'action' => 'view', $conference->language->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($conference->date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Url') ?></th>
                    <td><?= h($conference->url) ?></td>
                </tr>
                <tr>
                    <th><?= __('Conference Timezone') ?></th>
                    <td><?= $conference->has('conference_timezone') ? $this->Html->link($conference->conference_timezone->name, ['controller' => 'ConferenceTimezones', 'action' => 'view', $conference->conference_timezone->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Conference Type') ?></th>
                    <td><?= $conference->has('conference_type') ? $this->Html->link($conference->conference_type->name, ['controller' => 'ConferenceTypes', 'action' => 'view', $conference->conference_type->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Conference Status') ?></th>
                    <td><?= $conference->has('conference_status') ? $this->Html->link($conference->conference_status->name, ['controller' => 'ConferenceStatuses', 'action' => 'view', $conference->conference_status->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($conference->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Updated') ?></th>
                    <td><?= h($conference->updated) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($conference->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Counter') ?></th>
                    <td><?= $conference->counter === null ? '' : $this->Number->format($conference->counter) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Description') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($conference->description)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
