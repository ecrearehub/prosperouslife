<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Goal $goal
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Goal'), ['action' => 'edit', $goal->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Goal'), ['action' => 'delete', $goal->id], ['confirm' => __('Are you sure you want to delete # {0}?', $goal->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Goals'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Goal'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="goals view content">
            <h3><?= h($goal->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($goal->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($goal->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Updated') ?></th>
                    <td><?= h($goal->updated) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($goal->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Sort') ?></th>
                    <td><?= $goal->sort === null ? '' : $this->Number->format($goal->sort) ?></td>
                </tr>
                <tr>
                    <th><?= __('Users') ?></th>
                    <td><?= $goal->users === null ? '' : $this->Number->format($goal->users) ?></td>
                </tr>
                <tr>
                    <th><?= __('Projects') ?></th>
                    <td><?= $goal->projects === null ? '' : $this->Number->format($goal->projects) ?></td>
                </tr>
                <tr>
                    <th><?= __('Clicks') ?></th>
                    <td><?= $goal->clicks === null ? '' : $this->Number->format($goal->clicks) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Comment') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($goal->comment)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Description') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($goal->description)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Url') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($goal->url)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Users') ?></h4>
                <?php if (!empty($goal->users)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Parent Id') ?></th>
                            <th><?= __('Username') ?></th>
                            <th><?= __('Password') ?></th>
                            <th><?= __('Email') ?></th>
                            <th><?= __('First Name') ?></th>
                            <th><?= __('Last Name') ?></th>
                            <th><?= __('Birthday') ?></th>
                            <th><?= __('User Role Id') ?></th>
                            <th><?= __('User Status Id') ?></th>
                            <th><?= __('Skype') ?></th>
                            <th><?= __('Phone') ?></th>
                            <th><?= __('Mobile') ?></th>
                            <th><?= __('Address') ?></th>
                            <th><?= __('Zip') ?></th>
                            <th><?= __('City') ?></th>
                            <th><?= __('Country Id') ?></th>
                            <th><?= __('Code') ?></th>
                            <th><?= __('Activation') ?></th>
                            <th><?= __('Terms') ?></th>
                            <th><?= __('Complete') ?></th>
                            <th><?= __('Last Login') ?></th>
                            <th><?= __('Newsletter') ?></th>
                            <th><?= __('Tax Id') ?></th>
                            <th><?= __('Vat Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Updated') ?></th>
                            <th><?= __('Lft') ?></th>
                            <th><?= __('Rght') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($goal->users as $users) : ?>
                        <tr>
                            <td><?= h($users->id) ?></td>
                            <td><?= h($users->parent_id) ?></td>
                            <td><?= h($users->username) ?></td>
                            <td><?= h($users->password) ?></td>
                            <td><?= h($users->email) ?></td>
                            <td><?= h($users->first_name) ?></td>
                            <td><?= h($users->last_name) ?></td>
                            <td><?= h($users->birthday) ?></td>
                            <td><?= h($users->user_role_id) ?></td>
                            <td><?= h($users->user_status_id) ?></td>
                            <td><?= h($users->skype) ?></td>
                            <td><?= h($users->phone) ?></td>
                            <td><?= h($users->mobile) ?></td>
                            <td><?= h($users->address) ?></td>
                            <td><?= h($users->zip) ?></td>
                            <td><?= h($users->city) ?></td>
                            <td><?= h($users->country_id) ?></td>
                            <td><?= h($users->code) ?></td>
                            <td><?= h($users->activation) ?></td>
                            <td><?= h($users->terms) ?></td>
                            <td><?= h($users->complete) ?></td>
                            <td><?= h($users->last_login) ?></td>
                            <td><?= h($users->newsletter) ?></td>
                            <td><?= h($users->tax_id) ?></td>
                            <td><?= h($users->vat_id) ?></td>
                            <td><?= h($users->created) ?></td>
                            <td><?= h($users->updated) ?></td>
                            <td><?= h($users->lft) ?></td>
                            <td><?= h($users->rght) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Users', 'action' => 'view', $users->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Users', 'action' => 'edit', $users->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Users', 'action' => 'delete', $users->id], ['confirm' => __('Are you sure you want to delete # {0}?', $users->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Projects') ?></h4>
                <?php if (!empty($goal->projects)) : ?>
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
                        <?php foreach ($goal->projects as $projects) : ?>
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
