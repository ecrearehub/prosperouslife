<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sale $sale
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Sale'), ['action' => 'edit', $sale->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Sale'), ['action' => 'delete', $sale->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sale->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Sales'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Sale'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="sales view content">
            <h3><?= h($sale->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $sale->has('user') ? $this->Html->link($sale->user->id, ['controller' => 'Users', 'action' => 'view', $sale->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($sale->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Own') ?></th>
                    <td><?= $sale->own === null ? '' : $this->Number->format($sale->own) ?></td>
                </tr>
                <tr>
                    <th><?= __('Downline') ?></th>
                    <td><?= $sale->downline === null ? '' : $this->Number->format($sale->downline) ?></td>
                </tr>
                <tr>
                    <th><?= __('Total') ?></th>
                    <td><?= $sale->total === null ? '' : $this->Number->format($sale->total) ?></td>
                </tr>
                <tr>
                    <th><?= __('Percent') ?></th>
                    <td><?= $sale->percent === null ? '' : $this->Number->format($sale->percent) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cp Own') ?></th>
                    <td><?= $this->Number->format($sale->cp_own) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cp Downline') ?></th>
                    <td><?= $this->Number->format($sale->cp_downline) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cashback') ?></th>
                    <td><?= $this->Number->format($sale->cashback) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
