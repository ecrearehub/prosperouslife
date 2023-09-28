<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tree $tree
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Tree'), ['action' => 'edit', $tree->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Tree'), ['action' => 'delete', $tree->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tree->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Trees'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Tree'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="trees view content">
            <h3><?= h($tree->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Tree Status') ?></th>
                    <td><?= $tree->has('tree_status') ? $this->Html->link($tree->tree_status->name, ['controller' => 'TreeStatuses', 'action' => 'view', $tree->tree_status->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Tree Type') ?></th>
                    <td><?= $tree->has('tree_type') ? $this->Html->link($tree->tree_type->name, ['controller' => 'TreeTypes', 'action' => 'view', $tree->tree_type->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Tree Kind') ?></th>
                    <td><?= $tree->has('tree_kind') ? $this->Html->link($tree->tree_kind->name, ['controller' => 'TreeKinds', 'action' => 'view', $tree->tree_kind->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Location') ?></th>
                    <td><?= h($tree->location) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($tree->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Updated') ?></th>
                    <td><?= h($tree->updated) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($tree->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Orders') ?></h4>
                <?php if (!empty($tree->orders)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Amount') ?></th>
                            <th><?= __('Order Status Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Updated') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($tree->orders as $orders) : ?>
                        <tr>
                            <td><?= h($orders->id) ?></td>
                            <td><?= h($orders->user_id) ?></td>
                            <td><?= h($orders->amount) ?></td>
                            <td><?= h($orders->order_status_id) ?></td>
                            <td><?= h($orders->created) ?></td>
                            <td><?= h($orders->updated) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Orders', 'action' => 'view', $orders->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Orders', 'action' => 'edit', $orders->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Orders', 'action' => 'delete', $orders->id], ['confirm' => __('Are you sure you want to delete # {0}?', $orders->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Users') ?></h4>
                <?php if (!empty($tree->users)) : ?>
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
                        <?php foreach ($tree->users as $users) : ?>
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
        </div>
    </div>
</div>
