<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\NewsStatus $newsStatus
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit News Status'), ['action' => 'edit', $newsStatus->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete News Status'), ['action' => 'delete', $newsStatus->id], ['confirm' => __('Are you sure you want to delete # {0}?', $newsStatus->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List News Statuses'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New News Status'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="newsStatuses view content">
            <h3><?= h($newsStatus->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($newsStatus->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($newsStatus->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related News') ?></h4>
                <?php if (!empty($newsStatus->news)) : ?>
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
                        <?php foreach ($newsStatus->news as $news) : ?>
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
