<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\UserSkill> $userSkills
 */
?>
<div class="userSkills index content">
    <?= $this->Html->link(__('New User Skill'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('User Skills') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('hours') ?></th>
                    <th><?= $this->Paginator->sort('months') ?></th>
                    <th><?= $this->Paginator->sort('skill_blogging') ?></th>
                    <th><?= $this->Paginator->sort('skill_communication') ?></th>
                    <th><?= $this->Paginator->sort('skill_marketing') ?></th>
                    <th><?= $this->Paginator->sort('skill_systems') ?></th>
                    <th><?= $this->Paginator->sort('skill_web_development') ?></th>
                    <th><?= $this->Paginator->sort('skill_programming') ?></th>
                    <th><?= $this->Paginator->sort('skill_engineering') ?></th>
                    <th><?= $this->Paginator->sort('skill_accounting') ?></th>
                    <th><?= $this->Paginator->sort('skill_sales') ?></th>
                    <th><?= $this->Paginator->sort('skill_leadership') ?></th>
                    <th><?= $this->Paginator->sort('skill_teamwork') ?></th>
                    <th><?= $this->Paginator->sort('skill_coordination') ?></th>
                    <th><?= $this->Paginator->sort('skill_planning') ?></th>
                    <th><?= $this->Paginator->sort('skill_project_management') ?></th>
                    <th><?= $this->Paginator->sort('skill_negotiation') ?></th>
                    <th><?= $this->Paginator->sort('skill_networking') ?></th>
                    <th><?= $this->Paginator->sort('skill_entrepreneurship') ?></th>
                    <th><?= $this->Paginator->sort('skill_creativity') ?></th>
                    <th><?= $this->Paginator->sort('skill_designing') ?></th>
                    <th><?= $this->Paginator->sort('skill_photography') ?></th>
                    <th><?= $this->Paginator->sort('skill_film') ?></th>
                    <th><?= $this->Paginator->sort('skill_music') ?></th>
                    <th><?= $this->Paginator->sort('skill_crafting') ?></th>
                    <th><?= $this->Paginator->sort('skill_teaching') ?></th>
                    <th><?= $this->Paginator->sort('skill_working_with_children') ?></th>
                    <th><?= $this->Paginator->sort('skill_natural_sciences') ?></th>
                    <th><?= $this->Paginator->sort('skill_medical') ?></th>
                    <th><?= $this->Paginator->sort('skill_martial_arts') ?></th>
                    <th><?= $this->Paginator->sort('skill_yoga_pilates') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('updated') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($userSkills as $userSkill): ?>
                <tr>
                    <td><?= $this->Number->format($userSkill->id) ?></td>
                    <td><?= $userSkill->has('user') ? $this->Html->link($userSkill->user->id, ['controller' => 'Users', 'action' => 'view', $userSkill->user->id]) : '' ?></td>
                    <td><?= $userSkill->hours === null ? '' : $this->Number->format($userSkill->hours) ?></td>
                    <td><?= $userSkill->months === null ? '' : $this->Number->format($userSkill->months) ?></td>
                    <td><?= $userSkill->skill_blogging === null ? '' : $this->Number->format($userSkill->skill_blogging) ?></td>
                    <td><?= $userSkill->skill_communication === null ? '' : $this->Number->format($userSkill->skill_communication) ?></td>
                    <td><?= $userSkill->skill_marketing === null ? '' : $this->Number->format($userSkill->skill_marketing) ?></td>
                    <td><?= $userSkill->skill_systems === null ? '' : $this->Number->format($userSkill->skill_systems) ?></td>
                    <td><?= $userSkill->skill_web_development === null ? '' : $this->Number->format($userSkill->skill_web_development) ?></td>
                    <td><?= $userSkill->skill_programming === null ? '' : $this->Number->format($userSkill->skill_programming) ?></td>
                    <td><?= $userSkill->skill_engineering === null ? '' : $this->Number->format($userSkill->skill_engineering) ?></td>
                    <td><?= $userSkill->skill_accounting === null ? '' : $this->Number->format($userSkill->skill_accounting) ?></td>
                    <td><?= $userSkill->skill_sales === null ? '' : $this->Number->format($userSkill->skill_sales) ?></td>
                    <td><?= $userSkill->skill_leadership === null ? '' : $this->Number->format($userSkill->skill_leadership) ?></td>
                    <td><?= $userSkill->skill_teamwork === null ? '' : $this->Number->format($userSkill->skill_teamwork) ?></td>
                    <td><?= $userSkill->skill_coordination === null ? '' : $this->Number->format($userSkill->skill_coordination) ?></td>
                    <td><?= $userSkill->skill_planning === null ? '' : $this->Number->format($userSkill->skill_planning) ?></td>
                    <td><?= $userSkill->skill_project_management === null ? '' : $this->Number->format($userSkill->skill_project_management) ?></td>
                    <td><?= $userSkill->skill_negotiation === null ? '' : $this->Number->format($userSkill->skill_negotiation) ?></td>
                    <td><?= $userSkill->skill_networking === null ? '' : $this->Number->format($userSkill->skill_networking) ?></td>
                    <td><?= $userSkill->skill_entrepreneurship === null ? '' : $this->Number->format($userSkill->skill_entrepreneurship) ?></td>
                    <td><?= $userSkill->skill_creativity === null ? '' : $this->Number->format($userSkill->skill_creativity) ?></td>
                    <td><?= $userSkill->skill_designing === null ? '' : $this->Number->format($userSkill->skill_designing) ?></td>
                    <td><?= $userSkill->skill_photography === null ? '' : $this->Number->format($userSkill->skill_photography) ?></td>
                    <td><?= $userSkill->skill_film === null ? '' : $this->Number->format($userSkill->skill_film) ?></td>
                    <td><?= $userSkill->skill_music === null ? '' : $this->Number->format($userSkill->skill_music) ?></td>
                    <td><?= $userSkill->skill_crafting === null ? '' : $this->Number->format($userSkill->skill_crafting) ?></td>
                    <td><?= $userSkill->skill_teaching === null ? '' : $this->Number->format($userSkill->skill_teaching) ?></td>
                    <td><?= $userSkill->skill_working_with_children === null ? '' : $this->Number->format($userSkill->skill_working_with_children) ?></td>
                    <td><?= $userSkill->skill_natural_sciences === null ? '' : $this->Number->format($userSkill->skill_natural_sciences) ?></td>
                    <td><?= $userSkill->skill_medical === null ? '' : $this->Number->format($userSkill->skill_medical) ?></td>
                    <td><?= $userSkill->skill_martial_arts === null ? '' : $this->Number->format($userSkill->skill_martial_arts) ?></td>
                    <td><?= $userSkill->skill_yoga_pilates === null ? '' : $this->Number->format($userSkill->skill_yoga_pilates) ?></td>
                    <td><?= h($userSkill->created) ?></td>
                    <td><?= h($userSkill->updated) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $userSkill->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $userSkill->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $userSkill->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userSkill->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
