<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DonationsConection $donationsConection
 * @var \Cake\Collection\CollectionInterface|string[] $donations
 * @var \Cake\Collection\CollectionInterface|string[] $connections
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Donations Conections'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="donationsConections form content">
            <?= $this->Form->create($donationsConection) ?>
            <fieldset>
                <legend><?= __('Add Donations Conection') ?></legend>
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
