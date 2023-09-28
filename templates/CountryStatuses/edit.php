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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $countryStatus->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $countryStatus->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Country Statuses'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="countryStatuses form content">
            <?= $this->Form->create($countryStatus) ?>
            <fieldset>
                <legend><?= __('Edit Country Status') ?></legend>
                <?php
                    echo $this->Form->control('name');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
