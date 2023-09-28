<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New User'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="users view content">
            <h3><?= h($user->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Parent User') ?></th>
                    <td><?= $user->has('parent_user') ? $this->Html->link($user->parent_user->id, ['controller' => 'Users', 'action' => 'view', $user->parent_user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Username') ?></th>
                    <td><?= h($user->username) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($user->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('First Name') ?></th>
                    <td><?= h($user->first_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Last Name') ?></th>
                    <td><?= h($user->last_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Birthday') ?></th>
                    <td><?= h($user->birthday) ?></td>
                </tr>
                <tr>
                    <th><?= __('User Role') ?></th>
                    <td><?= $user->has('user_role') ? $this->Html->link($user->user_role->name, ['controller' => 'UserRoles', 'action' => 'view', $user->user_role->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('User Status') ?></th>
                    <td><?= $user->has('user_status') ? $this->Html->link($user->user_status->name, ['controller' => 'UserStatuses', 'action' => 'view', $user->user_status->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Skype') ?></th>
                    <td><?= h($user->skype) ?></td>
                </tr>
                <tr>
                    <th><?= __('Phone') ?></th>
                    <td><?= h($user->phone) ?></td>
                </tr>
                <tr>
                    <th><?= __('Mobile') ?></th>
                    <td><?= h($user->mobile) ?></td>
                </tr>
                <tr>
                    <th><?= __('Address') ?></th>
                    <td><?= h($user->address) ?></td>
                </tr>
                <tr>
                    <th><?= __('Zip') ?></th>
                    <td><?= h($user->zip) ?></td>
                </tr>
                <tr>
                    <th><?= __('City') ?></th>
                    <td><?= h($user->city) ?></td>
                </tr>
                <tr>
                    <th><?= __('Country') ?></th>
                    <td><?= $user->has('country') ? $this->Html->link($user->country->name, ['controller' => 'Countries', 'action' => 'view', $user->country->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Code') ?></th>
                    <td><?= h($user->code) ?></td>
                </tr>
                <tr>
                    <th><?= __('Last Login') ?></th>
                    <td><?= h($user->last_login) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tax Id') ?></th>
                    <td><?= h($user->tax_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Vat Id') ?></th>
                    <td><?= h($user->vat_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($user->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Updated') ?></th>
                    <td><?= h($user->updated) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($user->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Activation') ?></th>
                    <td><?= $user->activation === null ? '' : $this->Number->format($user->activation) ?></td>
                </tr>
                <tr>
                    <th><?= __('Terms') ?></th>
                    <td><?= $user->terms === null ? '' : $this->Number->format($user->terms) ?></td>
                </tr>
                <tr>
                    <th><?= __('Complete') ?></th>
                    <td><?= $user->complete === null ? '' : $this->Number->format($user->complete) ?></td>
                </tr>
                <tr>
                    <th><?= __('Newsletter') ?></th>
                    <td><?= $this->Number->format($user->newsletter) ?></td>
                </tr>
                <tr>
                    <th><?= __('Lft') ?></th>
                    <td><?= $user->lft === null ? '' : $this->Number->format($user->lft) ?></td>
                </tr>
                <tr>
                    <th><?= __('Rght') ?></th>
                    <td><?= $user->rght === null ? '' : $this->Number->format($user->rght) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Goals') ?></h4>
                <?php if (!empty($user->goals)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Comment') ?></th>
                            <th><?= __('Description') ?></th>
                            <th><?= __('Url') ?></th>
                            <th><?= __('Sort') ?></th>
                            <th><?= __('Users') ?></th>
                            <th><?= __('Projects') ?></th>
                            <th><?= __('Clicks') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Updated') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->goals as $goals) : ?>
                        <tr>
                            <td><?= h($goals->id) ?></td>
                            <td><?= h($goals->name) ?></td>
                            <td><?= h($goals->comment) ?></td>
                            <td><?= h($goals->description) ?></td>
                            <td><?= h($goals->url) ?></td>
                            <td><?= h($goals->sort) ?></td>
                            <td><?= h($goals->users) ?></td>
                            <td><?= h($goals->projects) ?></td>
                            <td><?= h($goals->clicks) ?></td>
                            <td><?= h($goals->created) ?></td>
                            <td><?= h($goals->updated) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Goals', 'action' => 'view', $goals->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Goals', 'action' => 'edit', $goals->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Goals', 'action' => 'delete', $goals->id], ['confirm' => __('Are you sure you want to delete # {0}?', $goals->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Languages') ?></h4>
                <?php if (!empty($user->languages)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Language Status Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->languages as $languages) : ?>
                        <tr>
                            <td><?= h($languages->id) ?></td>
                            <td><?= h($languages->name) ?></td>
                            <td><?= h($languages->language_status_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Languages', 'action' => 'view', $languages->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Languages', 'action' => 'edit', $languages->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Languages', 'action' => 'delete', $languages->id], ['confirm' => __('Are you sure you want to delete # {0}?', $languages->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Trees') ?></h4>
                <?php if (!empty($user->trees)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Tree Status Id') ?></th>
                            <th><?= __('Tree Type Id') ?></th>
                            <th><?= __('Tree Kind Id') ?></th>
                            <th><?= __('Location') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Updated') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->trees as $trees) : ?>
                        <tr>
                            <td><?= h($trees->id) ?></td>
                            <td><?= h($trees->tree_status_id) ?></td>
                            <td><?= h($trees->tree_type_id) ?></td>
                            <td><?= h($trees->tree_kind_id) ?></td>
                            <td><?= h($trees->location) ?></td>
                            <td><?= h($trees->created) ?></td>
                            <td><?= h($trees->updated) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Trees', 'action' => 'view', $trees->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Trees', 'action' => 'edit', $trees->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Trees', 'action' => 'delete', $trees->id], ['confirm' => __('Are you sure you want to delete # {0}?', $trees->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Accounts') ?></h4>
                <?php if (!empty($user->accounts)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Account Holder') ?></th>
                            <th><?= __('Account') ?></th>
                            <th><?= __('Iban') ?></th>
                            <th><?= __('Bic Swift') ?></th>
                            <th><?= __('Bank Name') ?></th>
                            <th><?= __('Address') ?></th>
                            <th><?= __('Account Status Id') ?></th>
                            <th><?= __('Account Type Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Updated') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->accounts as $accounts) : ?>
                        <tr>
                            <td><?= h($accounts->id) ?></td>
                            <td><?= h($accounts->user_id) ?></td>
                            <td><?= h($accounts->account_holder) ?></td>
                            <td><?= h($accounts->account) ?></td>
                            <td><?= h($accounts->iban) ?></td>
                            <td><?= h($accounts->bic_swift) ?></td>
                            <td><?= h($accounts->bank_name) ?></td>
                            <td><?= h($accounts->address) ?></td>
                            <td><?= h($accounts->account_status_id) ?></td>
                            <td><?= h($accounts->account_type_id) ?></td>
                            <td><?= h($accounts->created) ?></td>
                            <td><?= h($accounts->updated) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Accounts', 'action' => 'view', $accounts->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Accounts', 'action' => 'edit', $accounts->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Accounts', 'action' => 'delete', $accounts->id], ['confirm' => __('Are you sure you want to delete # {0}?', $accounts->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Donations') ?></h4>
                <?php if (!empty($user->donations)) : ?>
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
                        <?php foreach ($user->donations as $donations) : ?>
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
                <h4><?= __('Related Favorites') ?></h4>
                <?php if (!empty($user->favorites)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Project Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->favorites as $favorites) : ?>
                        <tr>
                            <td><?= h($favorites->id) ?></td>
                            <td><?= h($favorites->user_id) ?></td>
                            <td><?= h($favorites->project_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Favorites', 'action' => 'view', $favorites->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Favorites', 'action' => 'edit', $favorites->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Favorites', 'action' => 'delete', $favorites->id], ['confirm' => __('Are you sure you want to delete # {0}?', $favorites->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Invitations') ?></h4>
                <?php if (!empty($user->invitations)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('First Name') ?></th>
                            <th><?= __('Last Name') ?></th>
                            <th><?= __('Email') ?></th>
                            <th><?= __('Subject') ?></th>
                            <th><?= __('Message') ?></th>
                            <th><?= __('Invitation Status Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Updated') ?></th>
                            <th><?= __('Recall') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->invitations as $invitations) : ?>
                        <tr>
                            <td><?= h($invitations->id) ?></td>
                            <td><?= h($invitations->user_id) ?></td>
                            <td><?= h($invitations->first_name) ?></td>
                            <td><?= h($invitations->last_name) ?></td>
                            <td><?= h($invitations->email) ?></td>
                            <td><?= h($invitations->subject) ?></td>
                            <td><?= h($invitations->message) ?></td>
                            <td><?= h($invitations->invitation_status_id) ?></td>
                            <td><?= h($invitations->created) ?></td>
                            <td><?= h($invitations->updated) ?></td>
                            <td><?= h($invitations->recall) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Invitations', 'action' => 'view', $invitations->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Invitations', 'action' => 'edit', $invitations->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Invitations', 'action' => 'delete', $invitations->id], ['confirm' => __('Are you sure you want to delete # {0}?', $invitations->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Logs') ?></h4>
                <?php if (!empty($user->logs)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Access Ip') ?></th>
                            <th><?= __('Controller') ?></th>
                            <th><?= __('Action') ?></th>
                            <th><?= __('Description') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->logs as $logs) : ?>
                        <tr>
                            <td><?= h($logs->id) ?></td>
                            <td><?= h($logs->user_id) ?></td>
                            <td><?= h($logs->created) ?></td>
                            <td><?= h($logs->access_ip) ?></td>
                            <td><?= h($logs->controller) ?></td>
                            <td><?= h($logs->action) ?></td>
                            <td><?= h($logs->description) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Logs', 'action' => 'view', $logs->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Logs', 'action' => 'edit', $logs->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Logs', 'action' => 'delete', $logs->id], ['confirm' => __('Are you sure you want to delete # {0}?', $logs->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Notes') ?></h4>
                <?php if (!empty($user->notes)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Note') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Updated') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->notes as $notes) : ?>
                        <tr>
                            <td><?= h($notes->id) ?></td>
                            <td><?= h($notes->user_id) ?></td>
                            <td><?= h($notes->note) ?></td>
                            <td><?= h($notes->created) ?></td>
                            <td><?= h($notes->updated) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Notes', 'action' => 'view', $notes->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Notes', 'action' => 'edit', $notes->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Notes', 'action' => 'delete', $notes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $notes->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Orders') ?></h4>
                <?php if (!empty($user->orders)) : ?>
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
                        <?php foreach ($user->orders as $orders) : ?>
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
                <h4><?= __('Related Projects') ?></h4>
                <?php if (!empty($user->projects)) : ?>
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
                        <?php foreach ($user->projects as $projects) : ?>
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
            <div class="related">
                <h4><?= __('Related Sales') ?></h4>
                <?php if (!empty($user->sales)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Own') ?></th>
                            <th><?= __('Downline') ?></th>
                            <th><?= __('Total') ?></th>
                            <th><?= __('Percent') ?></th>
                            <th><?= __('Cp Own') ?></th>
                            <th><?= __('Cp Downline') ?></th>
                            <th><?= __('Cashback') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->sales as $sales) : ?>
                        <tr>
                            <td><?= h($sales->id) ?></td>
                            <td><?= h($sales->user_id) ?></td>
                            <td><?= h($sales->own) ?></td>
                            <td><?= h($sales->downline) ?></td>
                            <td><?= h($sales->total) ?></td>
                            <td><?= h($sales->percent) ?></td>
                            <td><?= h($sales->cp_own) ?></td>
                            <td><?= h($sales->cp_downline) ?></td>
                            <td><?= h($sales->cashback) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Sales', 'action' => 'view', $sales->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Sales', 'action' => 'edit', $sales->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Sales', 'action' => 'delete', $sales->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sales->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Transactions') ?></h4>
                <?php if (!empty($user->transactions)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Description') ?></th>
                            <th><?= __('Comment') ?></th>
                            <th><?= __('Amount') ?></th>
                            <th><?= __('Transaction Type Id') ?></th>
                            <th><?= __('Transaction Status Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Updated') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->transactions as $transactions) : ?>
                        <tr>
                            <td><?= h($transactions->id) ?></td>
                            <td><?= h($transactions->user_id) ?></td>
                            <td><?= h($transactions->description) ?></td>
                            <td><?= h($transactions->comment) ?></td>
                            <td><?= h($transactions->amount) ?></td>
                            <td><?= h($transactions->transaction_type_id) ?></td>
                            <td><?= h($transactions->transaction_status_id) ?></td>
                            <td><?= h($transactions->created) ?></td>
                            <td><?= h($transactions->updated) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Transactions', 'action' => 'view', $transactions->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Transactions', 'action' => 'edit', $transactions->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Transactions', 'action' => 'delete', $transactions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $transactions->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related User Privacy Settings') ?></h4>
                <?php if (!empty($user->user_privacy_settings)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Birthday') ?></th>
                            <th><?= __('Goals') ?></th>
                            <th><?= __('Skills') ?></th>
                            <th><?= __('Projects') ?></th>
                            <th><?= __('Legasy') ?></th>
                            <th><?= __('Trees') ?></th>
                            <th><?= __('Email') ?></th>
                            <th><?= __('Phone') ?></th>
                            <th><?= __('Mobile') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Updated') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->user_privacy_settings as $userPrivacySettings) : ?>
                        <tr>
                            <td><?= h($userPrivacySettings->id) ?></td>
                            <td><?= h($userPrivacySettings->user_id) ?></td>
                            <td><?= h($userPrivacySettings->birthday) ?></td>
                            <td><?= h($userPrivacySettings->goals) ?></td>
                            <td><?= h($userPrivacySettings->skills) ?></td>
                            <td><?= h($userPrivacySettings->projects) ?></td>
                            <td><?= h($userPrivacySettings->legasy) ?></td>
                            <td><?= h($userPrivacySettings->trees) ?></td>
                            <td><?= h($userPrivacySettings->email) ?></td>
                            <td><?= h($userPrivacySettings->phone) ?></td>
                            <td><?= h($userPrivacySettings->mobile) ?></td>
                            <td><?= h($userPrivacySettings->created) ?></td>
                            <td><?= h($userPrivacySettings->updated) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'UserPrivacySettings', 'action' => 'view', $userPrivacySettings->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'UserPrivacySettings', 'action' => 'edit', $userPrivacySettings->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'UserPrivacySettings', 'action' => 'delete', $userPrivacySettings->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userPrivacySettings->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related User Skills') ?></h4>
                <?php if (!empty($user->user_skills)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Description') ?></th>
                            <th><?= __('Hours') ?></th>
                            <th><?= __('Months') ?></th>
                            <th><?= __('Skill Blogging') ?></th>
                            <th><?= __('Skill Communication') ?></th>
                            <th><?= __('Skill Marketing') ?></th>
                            <th><?= __('Skill Systems') ?></th>
                            <th><?= __('Skill Web Development') ?></th>
                            <th><?= __('Skill Programming') ?></th>
                            <th><?= __('Skill Engineering') ?></th>
                            <th><?= __('Skill Accounting') ?></th>
                            <th><?= __('Skill Sales') ?></th>
                            <th><?= __('Skill Leadership') ?></th>
                            <th><?= __('Skill Teamwork') ?></th>
                            <th><?= __('Skill Coordination') ?></th>
                            <th><?= __('Skill Planning') ?></th>
                            <th><?= __('Skill Project Management') ?></th>
                            <th><?= __('Skill Negotiation') ?></th>
                            <th><?= __('Skill Networking') ?></th>
                            <th><?= __('Skill Entrepreneurship') ?></th>
                            <th><?= __('Skill Creativity') ?></th>
                            <th><?= __('Skill Designing') ?></th>
                            <th><?= __('Skill Photography') ?></th>
                            <th><?= __('Skill Film') ?></th>
                            <th><?= __('Skill Music') ?></th>
                            <th><?= __('Skill Crafting') ?></th>
                            <th><?= __('Skill Teaching') ?></th>
                            <th><?= __('Skill Working With Children') ?></th>
                            <th><?= __('Skill Natural Sciences') ?></th>
                            <th><?= __('Skill Medical') ?></th>
                            <th><?= __('Skill Martial Arts') ?></th>
                            <th><?= __('Skill Yoga Pilates') ?></th>
                            <th><?= __('Skill Others') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Updated') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->user_skills as $userSkills) : ?>
                        <tr>
                            <td><?= h($userSkills->id) ?></td>
                            <td><?= h($userSkills->user_id) ?></td>
                            <td><?= h($userSkills->description) ?></td>
                            <td><?= h($userSkills->hours) ?></td>
                            <td><?= h($userSkills->months) ?></td>
                            <td><?= h($userSkills->skill_blogging) ?></td>
                            <td><?= h($userSkills->skill_communication) ?></td>
                            <td><?= h($userSkills->skill_marketing) ?></td>
                            <td><?= h($userSkills->skill_systems) ?></td>
                            <td><?= h($userSkills->skill_web_development) ?></td>
                            <td><?= h($userSkills->skill_programming) ?></td>
                            <td><?= h($userSkills->skill_engineering) ?></td>
                            <td><?= h($userSkills->skill_accounting) ?></td>
                            <td><?= h($userSkills->skill_sales) ?></td>
                            <td><?= h($userSkills->skill_leadership) ?></td>
                            <td><?= h($userSkills->skill_teamwork) ?></td>
                            <td><?= h($userSkills->skill_coordination) ?></td>
                            <td><?= h($userSkills->skill_planning) ?></td>
                            <td><?= h($userSkills->skill_project_management) ?></td>
                            <td><?= h($userSkills->skill_negotiation) ?></td>
                            <td><?= h($userSkills->skill_networking) ?></td>
                            <td><?= h($userSkills->skill_entrepreneurship) ?></td>
                            <td><?= h($userSkills->skill_creativity) ?></td>
                            <td><?= h($userSkills->skill_designing) ?></td>
                            <td><?= h($userSkills->skill_photography) ?></td>
                            <td><?= h($userSkills->skill_film) ?></td>
                            <td><?= h($userSkills->skill_music) ?></td>
                            <td><?= h($userSkills->skill_crafting) ?></td>
                            <td><?= h($userSkills->skill_teaching) ?></td>
                            <td><?= h($userSkills->skill_working_with_children) ?></td>
                            <td><?= h($userSkills->skill_natural_sciences) ?></td>
                            <td><?= h($userSkills->skill_medical) ?></td>
                            <td><?= h($userSkills->skill_martial_arts) ?></td>
                            <td><?= h($userSkills->skill_yoga_pilates) ?></td>
                            <td><?= h($userSkills->skill_others) ?></td>
                            <td><?= h($userSkills->created) ?></td>
                            <td><?= h($userSkills->updated) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'UserSkills', 'action' => 'view', $userSkills->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'UserSkills', 'action' => 'edit', $userSkills->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'UserSkills', 'action' => 'delete', $userSkills->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userSkills->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Users') ?></h4>
                <?php if (!empty($user->child_users)) : ?>
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
                        <?php foreach ($user->child_users as $childUsers) : ?>
                        <tr>
                            <td><?= h($childUsers->id) ?></td>
                            <td><?= h($childUsers->parent_id) ?></td>
                            <td><?= h($childUsers->username) ?></td>
                            <td><?= h($childUsers->password) ?></td>
                            <td><?= h($childUsers->email) ?></td>
                            <td><?= h($childUsers->first_name) ?></td>
                            <td><?= h($childUsers->last_name) ?></td>
                            <td><?= h($childUsers->birthday) ?></td>
                            <td><?= h($childUsers->user_role_id) ?></td>
                            <td><?= h($childUsers->user_status_id) ?></td>
                            <td><?= h($childUsers->skype) ?></td>
                            <td><?= h($childUsers->phone) ?></td>
                            <td><?= h($childUsers->mobile) ?></td>
                            <td><?= h($childUsers->address) ?></td>
                            <td><?= h($childUsers->zip) ?></td>
                            <td><?= h($childUsers->city) ?></td>
                            <td><?= h($childUsers->country_id) ?></td>
                            <td><?= h($childUsers->code) ?></td>
                            <td><?= h($childUsers->activation) ?></td>
                            <td><?= h($childUsers->terms) ?></td>
                            <td><?= h($childUsers->complete) ?></td>
                            <td><?= h($childUsers->last_login) ?></td>
                            <td><?= h($childUsers->newsletter) ?></td>
                            <td><?= h($childUsers->tax_id) ?></td>
                            <td><?= h($childUsers->vat_id) ?></td>
                            <td><?= h($childUsers->created) ?></td>
                            <td><?= h($childUsers->updated) ?></td>
                            <td><?= h($childUsers->lft) ?></td>
                            <td><?= h($childUsers->rght) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Users', 'action' => 'view', $childUsers->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Users', 'action' => 'edit', $childUsers->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Users', 'action' => 'delete', $childUsers->id], ['confirm' => __('Are you sure you want to delete # {0}?', $childUsers->id)]) ?>
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
