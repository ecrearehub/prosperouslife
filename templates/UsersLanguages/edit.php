<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UsersLanguage $usersLanguage
 * @var string[]|\Cake\Collection\CollectionInterface $users
 * @var string[]|\Cake\Collection\CollectionInterface $languages
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $usersLanguage->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $usersLanguage->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Users Languages'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="usersLanguages form content">
            <?= $this->Form->create($usersLanguage) ?>
            <fieldset>
                <legend><?= __('Edit Users Language') ?></legend>
                <?php
                    echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
                    echo $this->Form->control('language_id', ['options' => $languages, 'empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>