<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UserSkill $userSkill
 * @var \Cake\Collection\CollectionInterface|string[] $users
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List User Skills'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="userSkills form content">
            <?= $this->Form->create($userSkill) ?>
            <fieldset>
                <legend><?= __('Add User Skill') ?></legend>
                <?php
                    echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
                    echo $this->Form->control('description');
                    echo $this->Form->control('hours');
                    echo $this->Form->control('months');
                    echo $this->Form->control('skill_blogging');
                    echo $this->Form->control('skill_communication');
                    echo $this->Form->control('skill_marketing');
                    echo $this->Form->control('skill_systems');
                    echo $this->Form->control('skill_web_development');
                    echo $this->Form->control('skill_programming');
                    echo $this->Form->control('skill_engineering');
                    echo $this->Form->control('skill_accounting');
                    echo $this->Form->control('skill_sales');
                    echo $this->Form->control('skill_leadership');
                    echo $this->Form->control('skill_teamwork');
                    echo $this->Form->control('skill_coordination');
                    echo $this->Form->control('skill_planning');
                    echo $this->Form->control('skill_project_management');
                    echo $this->Form->control('skill_negotiation');
                    echo $this->Form->control('skill_networking');
                    echo $this->Form->control('skill_entrepreneurship');
                    echo $this->Form->control('skill_creativity');
                    echo $this->Form->control('skill_designing');
                    echo $this->Form->control('skill_photography');
                    echo $this->Form->control('skill_film');
                    echo $this->Form->control('skill_music');
                    echo $this->Form->control('skill_crafting');
                    echo $this->Form->control('skill_teaching');
                    echo $this->Form->control('skill_working_with_children');
                    echo $this->Form->control('skill_natural_sciences');
                    echo $this->Form->control('skill_medical');
                    echo $this->Form->control('skill_martial_arts');
                    echo $this->Form->control('skill_yoga_pilates');
                    echo $this->Form->control('skill_others');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
