<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UserSkill $userSkill
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit User Skill'), ['action' => 'edit', $userSkill->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete User Skill'), ['action' => 'delete', $userSkill->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userSkill->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List User Skills'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New User Skill'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="userSkills view content">
            <h3><?= h($userSkill->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $userSkill->has('user') ? $this->Html->link($userSkill->user->id, ['controller' => 'Users', 'action' => 'view', $userSkill->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($userSkill->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Updated') ?></th>
                    <td><?= h($userSkill->updated) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($userSkill->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Hours') ?></th>
                    <td><?= $userSkill->hours === null ? '' : $this->Number->format($userSkill->hours) ?></td>
                </tr>
                <tr>
                    <th><?= __('Months') ?></th>
                    <td><?= $userSkill->months === null ? '' : $this->Number->format($userSkill->months) ?></td>
                </tr>
                <tr>
                    <th><?= __('Skill Blogging') ?></th>
                    <td><?= $userSkill->skill_blogging === null ? '' : $this->Number->format($userSkill->skill_blogging) ?></td>
                </tr>
                <tr>
                    <th><?= __('Skill Communication') ?></th>
                    <td><?= $userSkill->skill_communication === null ? '' : $this->Number->format($userSkill->skill_communication) ?></td>
                </tr>
                <tr>
                    <th><?= __('Skill Marketing') ?></th>
                    <td><?= $userSkill->skill_marketing === null ? '' : $this->Number->format($userSkill->skill_marketing) ?></td>
                </tr>
                <tr>
                    <th><?= __('Skill Systems') ?></th>
                    <td><?= $userSkill->skill_systems === null ? '' : $this->Number->format($userSkill->skill_systems) ?></td>
                </tr>
                <tr>
                    <th><?= __('Skill Web Development') ?></th>
                    <td><?= $userSkill->skill_web_development === null ? '' : $this->Number->format($userSkill->skill_web_development) ?></td>
                </tr>
                <tr>
                    <th><?= __('Skill Programming') ?></th>
                    <td><?= $userSkill->skill_programming === null ? '' : $this->Number->format($userSkill->skill_programming) ?></td>
                </tr>
                <tr>
                    <th><?= __('Skill Engineering') ?></th>
                    <td><?= $userSkill->skill_engineering === null ? '' : $this->Number->format($userSkill->skill_engineering) ?></td>
                </tr>
                <tr>
                    <th><?= __('Skill Accounting') ?></th>
                    <td><?= $userSkill->skill_accounting === null ? '' : $this->Number->format($userSkill->skill_accounting) ?></td>
                </tr>
                <tr>
                    <th><?= __('Skill Sales') ?></th>
                    <td><?= $userSkill->skill_sales === null ? '' : $this->Number->format($userSkill->skill_sales) ?></td>
                </tr>
                <tr>
                    <th><?= __('Skill Leadership') ?></th>
                    <td><?= $userSkill->skill_leadership === null ? '' : $this->Number->format($userSkill->skill_leadership) ?></td>
                </tr>
                <tr>
                    <th><?= __('Skill Teamwork') ?></th>
                    <td><?= $userSkill->skill_teamwork === null ? '' : $this->Number->format($userSkill->skill_teamwork) ?></td>
                </tr>
                <tr>
                    <th><?= __('Skill Coordination') ?></th>
                    <td><?= $userSkill->skill_coordination === null ? '' : $this->Number->format($userSkill->skill_coordination) ?></td>
                </tr>
                <tr>
                    <th><?= __('Skill Planning') ?></th>
                    <td><?= $userSkill->skill_planning === null ? '' : $this->Number->format($userSkill->skill_planning) ?></td>
                </tr>
                <tr>
                    <th><?= __('Skill Project Management') ?></th>
                    <td><?= $userSkill->skill_project_management === null ? '' : $this->Number->format($userSkill->skill_project_management) ?></td>
                </tr>
                <tr>
                    <th><?= __('Skill Negotiation') ?></th>
                    <td><?= $userSkill->skill_negotiation === null ? '' : $this->Number->format($userSkill->skill_negotiation) ?></td>
                </tr>
                <tr>
                    <th><?= __('Skill Networking') ?></th>
                    <td><?= $userSkill->skill_networking === null ? '' : $this->Number->format($userSkill->skill_networking) ?></td>
                </tr>
                <tr>
                    <th><?= __('Skill Entrepreneurship') ?></th>
                    <td><?= $userSkill->skill_entrepreneurship === null ? '' : $this->Number->format($userSkill->skill_entrepreneurship) ?></td>
                </tr>
                <tr>
                    <th><?= __('Skill Creativity') ?></th>
                    <td><?= $userSkill->skill_creativity === null ? '' : $this->Number->format($userSkill->skill_creativity) ?></td>
                </tr>
                <tr>
                    <th><?= __('Skill Designing') ?></th>
                    <td><?= $userSkill->skill_designing === null ? '' : $this->Number->format($userSkill->skill_designing) ?></td>
                </tr>
                <tr>
                    <th><?= __('Skill Photography') ?></th>
                    <td><?= $userSkill->skill_photography === null ? '' : $this->Number->format($userSkill->skill_photography) ?></td>
                </tr>
                <tr>
                    <th><?= __('Skill Film') ?></th>
                    <td><?= $userSkill->skill_film === null ? '' : $this->Number->format($userSkill->skill_film) ?></td>
                </tr>
                <tr>
                    <th><?= __('Skill Music') ?></th>
                    <td><?= $userSkill->skill_music === null ? '' : $this->Number->format($userSkill->skill_music) ?></td>
                </tr>
                <tr>
                    <th><?= __('Skill Crafting') ?></th>
                    <td><?= $userSkill->skill_crafting === null ? '' : $this->Number->format($userSkill->skill_crafting) ?></td>
                </tr>
                <tr>
                    <th><?= __('Skill Teaching') ?></th>
                    <td><?= $userSkill->skill_teaching === null ? '' : $this->Number->format($userSkill->skill_teaching) ?></td>
                </tr>
                <tr>
                    <th><?= __('Skill Working With Children') ?></th>
                    <td><?= $userSkill->skill_working_with_children === null ? '' : $this->Number->format($userSkill->skill_working_with_children) ?></td>
                </tr>
                <tr>
                    <th><?= __('Skill Natural Sciences') ?></th>
                    <td><?= $userSkill->skill_natural_sciences === null ? '' : $this->Number->format($userSkill->skill_natural_sciences) ?></td>
                </tr>
                <tr>
                    <th><?= __('Skill Medical') ?></th>
                    <td><?= $userSkill->skill_medical === null ? '' : $this->Number->format($userSkill->skill_medical) ?></td>
                </tr>
                <tr>
                    <th><?= __('Skill Martial Arts') ?></th>
                    <td><?= $userSkill->skill_martial_arts === null ? '' : $this->Number->format($userSkill->skill_martial_arts) ?></td>
                </tr>
                <tr>
                    <th><?= __('Skill Yoga Pilates') ?></th>
                    <td><?= $userSkill->skill_yoga_pilates === null ? '' : $this->Number->format($userSkill->skill_yoga_pilates) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Description') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($userSkill->description)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Skill Others') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($userSkill->skill_others)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
