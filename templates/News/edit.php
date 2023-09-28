<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\News $news
 * @var string[]|\Cake\Collection\CollectionInterface $newsStatuses
 * @var string[]|\Cake\Collection\CollectionInterface $languages
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $news->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $news->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List News'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="news form content">
            <?= $this->Form->create($news) ?>
            <fieldset>
                <legend><?= __('Edit News') ?></legend>
                <?php
                    echo $this->Form->control('subject');
                    echo $this->Form->control('text');
                    echo $this->Form->control('reader');
                    echo $this->Form->control('view');
                    echo $this->Form->control('news_status_id', ['options' => $newsStatuses, 'empty' => true]);
                    echo $this->Form->control('language_id', ['options' => $languages, 'empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
