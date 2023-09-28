<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProjectStatus $projectStatus
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Project Status'), ['action' => 'edit', $projectStatus->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Project Status'), ['action' => 'delete', $projectStatus->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projectStatus->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Project Statuses'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Project Status'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="projectStatuses view content">
            <h3><?= h($projectStatus->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($projectStatus->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($projectStatus->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Projects') ?></h4>
                <?php if (!empty($projectStatus->projects)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Goal Id') ?></th>
                            <th><?= __('Project Category Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Description') ?></th>
                            <th><?= __('Goal Meter') ?></th>
                            <th><?= __('Sourcecode') ?></th>
                            <th><?= __('Country Id') ?></th>
                            <th><?= __('View') ?></th>
                            <th><?= __('Project Status Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Update') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($projectStatus->projects as $projects) : ?>
                        <tr>
                            <td><?= h($projects->id) ?></td>
                            <td><?= h($projects->user_id) ?></td>
                            <td><?= h($projects->goal_id) ?></td>
                            <td><?= h($projects->project_category_id) ?></td>
                            <td><?= h($projects->name) ?></td>
                            <td><?= h($projects->description) ?></td>
                            <td><?= h($projects->goal_meter) ?></td>
                            <td><?= h($projects->sourcecode) ?></td>
                            <td><?= h($projects->country_id) ?></td>
                            <td><?= h($projects->view) ?></td>
                            <td><?= h($projects->project_status_id) ?></td>
                            <td><?= h($projects->created) ?></td>
                            <td><?= h($projects->update) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Projects', 'action' => 'view', $projects->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Projects', 'action' => 'edit', $projects->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Projects', 'action' => 'delete', $projects->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projects->id)]) ?>
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
