<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ConferenceTimezone $conferenceTimezone
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $conferenceTimezone->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $conferenceTimezone->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Conference Timezones'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="conferenceTimezones form content">
            <?= $this->Form->create($conferenceTimezone) ?>
            <fieldset>
                <legend><?= __('Edit Conference Timezone') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('country_code');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
