<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Invitation> $invitations
 */
?>

<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-display2 icon-gradient bg-mean-fruit"></i>
                </div>
                <div>
                    Пригласить
                    <div class="page-title-subheading opacity-10">
                        <nav class="" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <?php echo $this->Html->link('<i aria-hidden="true" class="fa fa-home"></i>', '/users/dashboard/', ['escape' => false]); ?>
                                </li>
                                <li class="breadcrumb-item">
                                    <a>Моя команда</a>
                                </li>
                                <li class="active breadcrumb-item" aria-current="page">
                                    Пригласить
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="page-title-actions">

            </div>
        </div>
    </div>

    <div class="tabs-animation">
        <div class="row">
            <div class="col-sm-12 col-lg-8">
                <div class="mb-3 card">
                    <div class="card-header-tab card-header">
                        <div class="card-header-title font-size-lg text-capitalize fw-normal">
                            <i class="header-icon lnr-menu icon-gradient bg-happy-itmeo"></i>
                            Обзор ваших приглашений
                        </div>
                    </div>
                    <div class="card-body">
                        <div style="text-algin: left;">
                            <?php echo $this->Html->link('<i class="pe-7s-add-user btn-icon-wrapper"></i> Пригласить', '/invitations/add/', ['class' => 'mb-2 me-2 btn btn-shadow btn-primary', 'escape' => false]); ?>
                        </div>

                        <?= $this->Flash->render() ?>

                        <div class="row">
                            <div class="col-sm-12">
                                <table style="width: 100%;" class="table table-hover">
                                    <thead>
                                        <tr role="row">
                                            <th rowspan="1" colspan="1">Приглашеный</th>
                                            <th rowspan="1" colspan="1">Email</th>
                                            <th rowspan="1" colspan="1">Последний контакт</th>
                                            <th rowspan="1" colspan="1">Статус</th>
                                            <th rowspan="1" colspan="1">Напомнить</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if (count($invitations) != 0): ?>
                                            <?php foreach ($invitations as $invitation): ?>
                                                <tr class="odd">
                                                    <td style="vertical-align: top;">
                                                        <?= $invitation->first_name; ?>
                                                        <?= $invitation->last_name; ?>
                                                    </td>
                                                    <td style="vertical-align: top;">
                                                        <?= $invitation->email; ?>
                                                    </td>
                                                    <td style="vertical-align: top;">
                                                        <?= date_format($invitation->modified, "d.m.Y"); ?>
                                                    </td>
                                                    <td style="vertical-align: top;">
                                                        <?= $invitation->invitation_status->name; ?>
                                                    </td>
                                                    <td style="vertical-align: top;">
                                                        <?php if (strtotime($invitation->recall) <= time() and $invitation->invitation_status->id == 1): ?>
                                                            <?= $this->Html->link('<i class="lnr-envelope"></i>', '/invitations/recall/' . $invitation->id, ['class' => 'mb-2 me-2 btn-icon btn btn-info', 'escape' => false, 'data-bs-toggle' => 'tooltip', 'data-bs-placement' => 'top', 'title data-bs-original-title' => 'Отправить напоминание']); ?>
                                                            <?php //$this->Form->postLink('<i class="pe-7s-trash btn-icon-wrapper"></i>', ['action' => 'delete', $invitation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $invitation->id), 'class' => 'mb-2 me-2 btn-icon btn-icon-only btn btn-danger', 'escape' => false, 'data-bs-toggle' => 'tooltip', 'data-bs-placement' => 'top', 'title data-bs-original-title' => 'Приглашение удалить']) ?>
                                                        <?php endif ?>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        <?php else: ?>
                                            <tr class="odd">
                                                <td colspan="5" style="vertical-align: top;">
                                                    Вы еще никого не пригласили
                                                </td>
                                            </tr>
                                        <?php endif ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th rowspan="1" colspan="1">Приглашеный</th>
                                            <th rowspan="1" colspan="1">Email</th>
                                            <th rowspan="1" colspan="1">Последний контакт</th>
                                            <th rowspan="1" colspan="1">Статус</th>
                                            <th rowspan="1" colspan="1">Напомнить</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-lg-4">
                <div class="card-hover-shadow-2x mb-3 card">
                    <?php echo $this->element('support'); ?>
                </div>
                <div class="card-hover-shadow-2x mb-3 card">
                    <?php echo $this->element('invitations/statistics'); ?>
                </div>
            </div>
        </div>
    </div>
</div>