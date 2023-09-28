<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TreeStatus $treeStatus
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Tree Status'), ['action' => 'edit', $treeStatus->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Tree Status'), ['action' => 'delete', $treeStatus->id], ['confirm' => __('Are you sure you want to delete # {0}?', $treeStatus->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Tree Statuses'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Tree Status'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="treeStatuses view content">
            <h3><?= h($treeStatus->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($treeStatus->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($treeStatus->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Trees') ?></h4>
                <?php if (!empty($treeStatus->trees)) : ?>
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
                        <?php foreach ($treeStatus->trees as $trees) : ?>
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
        </div>
    </div>
</div>
