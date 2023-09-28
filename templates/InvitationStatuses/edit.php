<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\InvitationStatus $invitationStatus
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $invitationStatus->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $invitationStatus->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Invitation Statuses'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="invitationStatuses form content">
            <?= $this->Form->create($invitationStatus) ?>
            <fieldset>
                <legend><?= __('Edit Invitation Status') ?></legend>
                <?php
                    echo $this->Form->control('name');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
