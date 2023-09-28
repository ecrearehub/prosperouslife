<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Conference $conference
 * @var string[]|\Cake\Collection\CollectionInterface $languages
 * @var string[]|\Cake\Collection\CollectionInterface $conferenceTimezones
 * @var string[]|\Cake\Collection\CollectionInterface $conferenceTypes
 * @var string[]|\Cake\Collection\CollectionInterface $conferenceStatuses
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $conference->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $conference->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Conferences'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="conferences form content">
            <?= $this->Form->create($conference) ?>
            <fieldset>
                <legend><?= __('Edit Conference') ?></legend>
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
