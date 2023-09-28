<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DonationsOperation $donationsOperation
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Donations Operation'), ['action' => 'edit', $donationsOperation->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Donations Operation'), ['action' => 'delete', $donationsOperation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $donationsOperation->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Donations Operations'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Donations Operation'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="donationsOperations view content">
            <h3><?= h($donationsOperation->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Donation') ?></th>
                    <td><?= $donationsOperation->has('donation') ? $this->Html->link($donationsOperation->donation->id, ['controller' => 'Donations', 'action' => 'view', $donationsOperation->donation->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Operation') ?></th>
                    <td><?= $donationsOperation->has('operation') ? $this->Html->link($donationsOperation->operation->id, ['controller' => 'Operations', 'action' => 'view', $donationsOperation->operation->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($donationsOperation->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
