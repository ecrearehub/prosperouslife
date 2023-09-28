<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AccountType $accountType
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Account Type'), ['action' => 'edit', $accountType->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Account Type'), ['action' => 'delete', $accountType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $accountType->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Account Types'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Account Type'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="accountTypes view content">
            <h3><?= h($accountType->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($accountType->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($accountType->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Accounts') ?></h4>
                <?php if (!empty($accountType->accounts)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Account Holder') ?></th>
                            <th><?= __('Account') ?></th>
                            <th><?= __('Iban') ?></th>
                            <th><?= __('Bic Swift') ?></th>
                            <th><?= __('Bank Name') ?></th>
                            <th><?= __('Address') ?></th>
                            <th><?= __('Account Status Id') ?></th>
                            <th><?= __('Account Type Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Updated') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($accountType->accounts as $accounts) : ?>
                        <tr>
                            <td><?= h($accounts->id) ?></td>
                            <td><?= h($accounts->user_id) ?></td>
                            <td><?= h($accounts->account_holder) ?></td>
                            <td><?= h($accounts->account) ?></td>
                            <td><?= h($accounts->iban) ?></td>
                            <td><?= h($accounts->bic_swift) ?></td>
                            <td><?= h($accounts->bank_name) ?></td>
                            <td><?= h($accounts->address) ?></td>
                            <td><?= h($accounts->account_status_id) ?></td>
                            <td><?= h($accounts->account_type_id) ?></td>
                            <td><?= h($accounts->created) ?></td>
                            <td><?= h($accounts->updated) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Accounts', 'action' => 'view', $accounts->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Accounts', 'action' => 'edit', $accounts->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Accounts', 'action' => 'delete', $accounts->id], ['confirm' => __('Are you sure you want to delete # {0}?', $accounts->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
