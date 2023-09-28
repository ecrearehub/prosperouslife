<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CountryStatus $countryStatus
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Country Status'), ['action' => 'edit', $countryStatus->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Country Status'), ['action' => 'delete', $countryStatus->id], ['confirm' => __('Are you sure you want to delete # {0}?', $countryStatus->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Country Statuses'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Country Status'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="countryStatuses view content">
            <h3><?= h($countryStatus->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($countryStatus->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($countryStatus->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Countries') ?></h4>
                <?php if (!empty($countryStatus->countries)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Flag') ?></th>
                            <th><?= __('Iso Code') ?></th>
                            <th><?= __('Phone Code') ?></th>
                            <th><?= __('Country Status Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($countryStatus->countries as $countries) : ?>
                        <tr>
                            <td><?= h($countries->id) ?></td>
                            <td><?= h($countries->name) ?></td>
                            <td><?= h($countries->flag) ?></td>
                            <td><?= h($countries->iso_code) ?></td>
                            <td><?= h($countries->phone_code) ?></td>
                            <td><?= h($countries->country_status_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Countries', 'action' => 'view', $countries->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Countries', 'action' => 'edit', $countries->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Countries', 'action' => 'delete', $countries->id], ['confirm' => __('Are you sure you want to delete # {0}?', $countries->id)]) ?>
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
