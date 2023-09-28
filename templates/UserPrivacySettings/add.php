<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UserPrivacySetting $userPrivacySetting
 * @var \Cake\Collection\CollectionInterface|string[] $users
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List User Privacy Settings'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="userPrivacySettings form content">
            <?= $this->Form->create($userPrivacySetting) ?>
            <fieldset>
                <legend><?= __('Add User Privacy Setting') ?></legend>
                <?php
                    echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
                    echo $this->Form->control('birthday');
                    echo $this->Form->control('goals');
                    echo $this->Form->control('skills');
                    echo $this->Form->control('projects');
                    echo $this->Form->control('legasy');
                    echo $this->Form->control('trees');
                    echo $this->Form->control('email');
                    echo $this->Form->control('phone');
                    echo $this->Form->control('mobile');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
