<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LanguageStatus $languageStatus
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Language Status'), ['action' => 'edit', $languageStatus->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Language Status'), ['action' => 'delete', $languageStatus->id], ['confirm' => __('Are you sure you want to delete # {0}?', $languageStatus->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Language Statuses'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Language Status'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="languageStatuses view content">
            <h3><?= h($languageStatus->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($languageStatus->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($languageStatus->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Languages') ?></h4>
                <?php if (!empty($languageStatus->languages)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Language Status Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($languageStatus->languages as $languages) : ?>
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
        </div>
    </div>
</div>
