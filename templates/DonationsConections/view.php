<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DonationsConection $donationsConection
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Donations Conection'), ['action' => 'edit', $donationsConection->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Donations Conection'), ['action' => 'delete', $donationsConection->id], ['confirm' => __('Are you sure you want to delete # {0}?', $donationsConection->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Donations Conections'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Donations Conection'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="donationsConections view content">
            <h3><?= h($donationsConection->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Donation') ?></th>
                    <td><?= $donationsConection->has('donation') ? $this->Html->link($donationsConection->donation->id, ['controller' => 'Donations', 'action' => 'view', $donationsConection->donation->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Connection') ?></th>
                    <td><?= $donationsConection->has('connection') ? $this->Html->link($donationsConection->connection->name, ['controller' => 'Connections', 'action' => 'view', $donationsConection->connection->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Sourceid') ?></th>
                    <td><?= h($donationsConection->sourceid) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($donationsConection->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
