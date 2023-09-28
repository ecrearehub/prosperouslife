<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ConferenceType $conferenceType
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Conference Type'), ['action' => 'edit', $conferenceType->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Conference Type'), ['action' => 'delete', $conferenceType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $conferenceType->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Conference Types'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Conference Type'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="conferenceTypes view content">
            <h3><?= h($conferenceType->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($conferenceType->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($conferenceType->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Conferences') ?></h4>
                <?php if (!empty($conferenceType->conferences)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Language Id') ?></th>
                            <th><?= __('Date') ?></th>
                            <th><?= __('Description') ?></th>
                            <th><?= __('Url') ?></th>
                            <th><?= __('Conference Timezone Id') ?></th>
                            <th><?= __('Counter') ?></th>
                            <th><?= __('Conference Type Id') ?></th>
                            <th><?= __('Conference Status Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Updated') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($conferenceType->conferences as $conferences) : ?>
                        <tr>
                            <td><?= h($conferences->id) ?></td>
                            <td><?= h($conferences->language_id) ?></td>
                            <td><?= h($conferences->date) ?></td>
                            <td><?= h($conferences->description) ?></td>
                            <td><?= h($conferences->url) ?></td>
                            <td><?= h($conferences->conference_timezone_id) ?></td>
                            <td><?= h($conferences->counter) ?></td>
                            <td><?= h($conferences->conference_type_id) ?></td>
                            <td><?= h($conferences->conference_status_id) ?></td>
                            <td><?= h($conferences->created) ?></td>
                            <td><?= h($conferences->updated) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Conferences', 'action' => 'view', $conferences->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Conferences', 'action' => 'edit', $conferences->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Conferences', 'action' => 'delete', $conferences->id], ['confirm' => __('Are you sure you want to delete # {0}?', $conferences->id)]) ?>
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
