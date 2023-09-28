<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DonationsConection $donationsConection
 * @var string[]|\Cake\Collection\CollectionInterface $donations
 * @var string[]|\Cake\Collection\CollectionInterface $connections
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $donationsConection->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $donationsConection->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Donations Conections'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="donationsConections form content">
            <?= $this->Form->create($donationsConection) ?>
            <fieldset>
                <legend><?= __('Edit Donations Conection') ?></legend>
                <?php
                    echo $this->Form->control('donation_id', ['options' => $donations, 'empty' => true]);
                    echo $this->Form->control('connection_id', ['options' => $connections, 'empty' => true]);
                    echo $this->Form->control('sourceid');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
