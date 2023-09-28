<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ConferenceType $conferenceType
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $conferenceType->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $conferenceType->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Conference Types'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="conferenceTypes form content">
            <?= $this->Form->create($conferenceType) ?>
            <fieldset>
                <legend><?= __('Edit Conference Type') ?></legend>
                <?php
                    echo $this->Form->control('name');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
