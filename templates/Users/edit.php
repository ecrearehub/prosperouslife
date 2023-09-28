<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 * @var string[]|\Cake\Collection\CollectionInterface $parentUsers
 * @var string[]|\Cake\Collection\CollectionInterface $userRoles
 * @var string[]|\Cake\Collection\CollectionInterface $userStatuses
 * @var string[]|\Cake\Collection\CollectionInterface $countries
 * @var string[]|\Cake\Collection\CollectionInterface $goals
 * @var string[]|\Cake\Collection\CollectionInterface $languages
 * @var string[]|\Cake\Collection\CollectionInterface $trees
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $user->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $user->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="users form content">
            <?= $this->Form->create($user) ?>
            <fieldset>
                <legend><?= __('Edit User') ?></legend>
                <?php
                    echo $this->Form->control('parent_id', ['options' => $parentUsers, 'empty' => true]);
                    echo $this->Form->control('username');
                    echo $this->Form->control('password');
                    echo $this->Form->control('email');
                    echo $this->Form->control('first_name');
                    echo $this->Form->control('last_name');
                    echo $this->Form->control('birthday');
                    echo $this->Form->control('user_role_id', ['options' => $userRoles, 'empty' => true]);
                    echo $this->Form->control('user_status_id', ['options' => $userStatuses, 'empty' => true]);
                    echo $this->Form->control('skype');
                    echo $this->Form->control('phone');
                    echo $this->Form->control('mobile');
                    echo $this->Form->control('address');
                    echo $this->Form->control('zip');
                    echo $this->Form->control('city');
                    echo $this->Form->control('country_id', ['options' => $countries, 'empty' => true]);
                    echo $this->Form->control('code');
                    echo $this->Form->control('activation');
                    echo $this->Form->control('terms');
                    echo $this->Form->control('complete');
                    echo $this->Form->control('last_login');
                    echo $this->Form->control('newsletter');
                    echo $this->Form->control('tax_id');
                    echo $this->Form->control('vat_id');
                    echo $this->Form->control('goals._ids', ['options' => $goals]);
                    echo $this->Form->control('languages._ids', ['options' => $languages]);
                    echo $this->Form->control('trees._ids', ['options' => $trees]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
