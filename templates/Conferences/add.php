<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Conference $conference
 * @var \Cake\Collection\CollectionInterface|string[] $languages
 * @var \Cake\Collection\CollectionInterface|string[] $conferenceTimezones
 * @var \Cake\Collection\CollectionInterface|string[] $conferenceTypes
 * @var \Cake\Collection\CollectionInterface|string[] $conferenceStatuses
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Conferences'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="conferences form content">
            <?= $this->Form->create($conference) ?>
            <fieldset>
                <legend><?= __('Add Conference') ?></legend>
                <?php
                    echo $this->Form->control('language_id', ['options' => $languages, 'empty' => true]);
                    echo $this->Form->control('date');
                    echo $this->Form->control('description');
                    echo $this->Form->control('url');
                    echo $this->Form->control('conference_timezone_id', ['options' => $conferenceTimezones, 'empty' => true]);
                    echo $this->Form->control('counter');
                    echo $this->Form->control('conference_type_id', ['options' => $conferenceTypes, 'empty' => true]);
                    echo $this->Form->control('conference_status_id', ['options' => $conferenceStatuses, 'empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
