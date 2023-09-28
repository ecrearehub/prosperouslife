<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UserStatus $userStatus
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $userStatus->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $userStatus->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List User Statuses'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="userStatuses form content">
            <?= $this->Form->create($userStatus) ?>
            <fieldset>
                <legend><?= __('Edit User Status') ?></legend>
                <?php
                    echo $this->Form->control('name');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
