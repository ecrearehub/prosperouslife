<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Language $language
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Language'), ['action' => 'edit', $language->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Language'), ['action' => 'delete', $language->id], ['confirm' => __('Are you sure you want to delete # {0}?', $language->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Languages'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Language'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="languages view content">
            <h3><?= h($language->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($language->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Language Status') ?></th>
                    <td><?= $language->has('language_status') ? $this->Html->link($language->language_status->name, ['controller' => 'LanguageStatuses', 'action' => 'view', $language->language_status->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($language->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Users') ?></h4>
                <?php if (!empty($language->users)) : ?>
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
                        <?php foreach ($language->users as $users) : ?>
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
                <h4><?= __('Related Conferences') ?></h4>
                <?php if (!empty($language->conferences)) : ?>
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
                        <?php foreach ($language->conferences as $conferences) : ?>
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
            <div class="related">
                <h4><?= __('Related News') ?></h4>
                <?php if (!empty($language->news)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Subject') ?></th>
                            <th><?= __('Text') ?></th>
                            <th><?= __('Reader') ?></th>
                            <th><?= __('View') ?></th>
                            <th><?= __('News Status Id') ?></th>
                            <th><?= __('Language Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Updated') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($language->news as $news) : ?>
                        <tr>
                            <td><?= h($news->id) ?></td>
                            <td><?= h($news->subject) ?></td>
                            <td><?= h($news->text) ?></td>
                            <td><?= h($news->reader) ?></td>
                            <td><?= h($news->view) ?></td>
                            <td><?= h($news->news_status_id) ?></td>
                            <td><?= h($news->language_id) ?></td>
                            <td><?= h($news->created) ?></td>
                            <td><?= h($news->updated) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'News', 'action' => 'view', $news->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'News', 'action' => 'edit', $news->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'News', 'action' => 'delete', $news->id], ['confirm' => __('Are you sure you want to delete # {0}?', $news->id)]) ?>
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
