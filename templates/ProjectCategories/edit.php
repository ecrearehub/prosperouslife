<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProjectCategory $projectCategory
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $projectCategory->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $projectCategory->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Project Categories'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="projectCategories form content">
            <?= $this->Form->create($projectCategory) ?>
            <fieldset>
                <legend><?= __('Edit Project Category') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('comment');
                    echo $this->Form->control('description');
                    echo $this->Form->control('url');
                    echo $this->Form->control('sort');
                    echo $this->Form->control('counter');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
