<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Project $project
 * @var \Cake\Collection\CollectionInterface|string[] $users
 * @var \Cake\Collection\CollectionInterface|string[] $goals
 * @var \Cake\Collection\CollectionInterface|string[] $projectCategories
 * @var \Cake\Collection\CollectionInterface|string[] $countries
 * @var \Cake\Collection\CollectionInterface|string[] $projectStatuses
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Projects'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="projects form content">
            <?= $this->Form->create($project) ?>
            <fieldset>
                <legend><?= __('Add Project') ?></legend>
                <?php
                    echo $this->Form->control('user_id', ['options' => $users]);
                    echo $this->Form->control('goal_id', ['options' => $goals, 'empty' => true]);
                    echo $this->Form->control('project_category_id', ['options' => $projectCategories, 'empty' => true]);
                    echo $this->Form->control('name');
                    echo $this->Form->control('description');
                    echo $this->Form->control('goal_meter');
                    echo $this->Form->control('sourcecode');
                    echo $this->Form->control('country_id', ['options' => $countries, 'empty' => true]);
                    echo $this->Form->control('view');
                    echo $this->Form->control('project_status_id', ['options' => $projectStatuses, 'empty' => true]);
                    echo $this->Form->control('update');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
