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
                    <i class="pe-7s-users icon-gradient bg-mean-fruit"></i>
                </div>
                <div>
                    Cтруктура
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
                                    Cтруктура
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
                        <div class="card-header-title font-size-lg fw-normal" style="text-transform: none;">
                            <i class="header-icon pe-7s-users icon-gradient bg-happy-itmeo"></i>
                            Ваши партнёры
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="text-right">
                            <?php echo $this->Html->link('<i class="pe-7s-add-user btn-icon-wrapper"></i> Пригласить', '/invitations/add/', ['class' => 'mb-2 me-2 btn btn-shadow btn-primary', 'escape' => false]); ?>
                            <?php // echo $this->Html->link('<i class="pe-7s-users btn-icon-wrapper"></i> Organization chart', 'https://balkan.app/OrgChartJS/Demos/Assistant', ['target' => 'blank', 'class' => 'mb-2 me-2 btn btn-shadow btn-primary', 'escape' => false]); ?>
                        </div>

                        <?= $this->Flash->render() ?>

                        <div class="row">
                            <div class="col-sm-12">
                                <table style="width: 100%;" class="table table-hover">
                                    <thead>
                                        <tr role="row">
                                            <th rowspan="1" colspan="1">#</th>
                                            <th rowspan="1" colspan="1">ID</th>
                                            <th rowspan="1" colspan="1">Партнер</th>
                                            <th rowspan="1" colspan="1">Активность</th>
                                            <th rowspan="1" colspan="1">Контакт</th>
                                            <th rowspan="1" colspan="1">Действие</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if (count($partners) != 0): ?>
                                            <?php $counter = 1 ?>
                                            <?php foreach ($partners as $partner): ?>

                                                <tr class="odd">
                                                    <td style="vertical-align: top;">
                                                        <?= $counter ?>
                                                    </td>
                                                    <td style="vertical-align: top;">
                                                        <?= $partner->id; ?>
                                                    </td>
                                                    <td style="vertical-align: top;">

                                                        <div class="container mb-3">
                                                            <div class="row">
                                                                <div class="col-sm-4">
                                                                    <div class="avatar-icon-wrapper">
                                                                        <div class="avatar-icon">
                                                                            <?php echo $this->Html->image($this->Url->build(['controller' => 'Users', 'action' => 'avatar/' . $partner->id]), ['class' => 'shadow-sm']); ?>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-8">
                                                                    <?= $partner->first_name; ?>
                                                                    <?= $partner->last_name; ?>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </td>
                                                    <td style="vertical-align: top;">
                                                        <div class="dropdown d-inline-block">
                                                            <button type="button" aria-haspopup="true" aria-expanded="false"
                                                                data-bs-toggle="dropdown"
                                                                class="mb-2 me-2 dropdown-toggle btn btn-info">
                                                                <i class="pe-7s-rocket"></i>
                                                            </button>
                                                            <div tabindex="-1" role="menu" aria-hidden="true"
                                                                class="dropdown-menu-hover-link dropdown-menu" style="">
                                                                <div class="dropdown-menu-header">
                                                                    <div class="dropdown-menu-header-inner bg-focus">
                                                                        <div class="menu-header-image opacity-8"
                                                                            style="background-image: url('images/dropdown-header/city3.jpg');">
                                                                        </div>
                                                                        <div class="menu-header-content">
                                                                            <h5 class="menu-header-title">Активность</h5>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <h6 tabindex="-1" class="dropdown-header">Aккаунт</h6>
                                                                <div>
                                                                    <?php if ($partner->activated == 1): ?>
                                                                        <span class="ms-3 badge rounded-pill bg-success">A</span>
                                                                    <?php else: ?>
                                                                        <span class="ms-3 badge rounded-pill bg-danger">A</span>
                                                                    <?php endif ?>

                                                                    <?php if ($partner->terms == 1): ?>
                                                                        <span class="badge rounded-pill bg-success">P</span>
                                                                    <?php else: ?>
                                                                        <span class="badge rounded-pill bg-danger">P</span>
                                                                    <?php endif ?>

                                                                    <span class="badge rounded-pill bg-danger">L</span>
                                                                </div>
                                                                <h6 tabindex="-1" class="dropdown-header">Kоманда</h6>
                                                                <div>
                                                                    <span class="ms-3 badge rounded-pill bg-danger">5</span>
                                                                    <span class="badge rounded-pill bg-danger">10</span>
                                                                    <span class="badge rounded-pill bg-danger">20</span>
                                                                    <span class="badge rounded-pill bg-danger">50</span>
                                                                    <span class="badge rounded-pill bg-danger">100</span>
                                                                </div>
                                                                <h6 tabindex="-1" class="dropdown-header">План действий</h6>
                                                                <div>

                                                                    <?php if ($partner->step_id >= 2): ?>
                                                                        <span class="ms-3 badge rounded-pill bg-success">1</span>
                                                                    <?php else: ?>
                                                                        <span class="ms-3 badge rounded-pill bg-danger">1</span>
                                                                    <?php endif ?>

                                                                    <?php if ($partner->step_id >= 3): ?>
                                                                        <span class="badge rounded-pill bg-success">2</span>
                                                                    <?php else: ?>
                                                                        <span class="badge rounded-pill bg-danger">2</span>
                                                                    <?php endif ?>

                                                                    <?php if ($partner->step_id >= 4): ?>
                                                                        <span class="badge rounded-pill bg-success">3</span>
                                                                    <?php else: ?>
                                                                        <span class="badge rounded-pill bg-danger">3</span>
                                                                    <?php endif ?>

                                                                    <?php if ($partner->step_id >= 5): ?>
                                                                        <span class="badge rounded-pill bg-success">4</span>
                                                                    <?php else: ?>
                                                                        <span class="badge rounded-pill bg-danger">4</span>
                                                                    <?php endif ?>

                                                                    <?php if ($partner->step_id >= 6): ?>
                                                                        <span class="badge rounded-pill bg-success">5</span>
                                                                    <?php else: ?>
                                                                        <span class="badge rounded-pill bg-danger">5</span>
                                                                    <?php endif ?>

                                                                    <?php if ($partner->step_id == 6 and $partner->step_status_id == 3): ?>
                                                                        <span class="badge rounded-pill bg-success">6</span>
                                                                    <?php else: ?>
                                                                        <span class="badge rounded-pill bg-danger">6</span>
                                                                    <?php endif ?>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td style="vertical-align: top;">
                                                        <div class="dropdown d-inline-block">
                                                            <button type="button" aria-haspopup="true" aria-expanded="false"
                                                                data-bs-toggle="dropdown"
                                                                class="mb-2 me-2 dropdown-toggle btn btn-info">
                                                                <i class="pe-7s-mail"></i>
                                                            </button>
                                                            <div tabindex="-1" role="menu" aria-hidden="true"
                                                                class="dropdown-menu-hover-link dropdown-menu" style="">
                                                                <div class="dropdown-menu-header">
                                                                    <div class="dropdown-menu-header-inner bg-focus">
                                                                        <div class="menu-header-image opacity-8"
                                                                            style="background-image: url('images/dropdown-header/city3.jpg');">
                                                                        </div>
                                                                        <div class="menu-header-content">
                                                                            <h5 class="menu-header-title">Контакт</h5>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <?php if (!empty($partner->phone)): ?>
                                                                    <?php echo $this->Html->link('<i class="dropdown-icon lnr-phone"></i><span>' . $partner->phone . '</span>', 'tel:' . $partner->phone, ['class' => 'dropdown-item', 'escape' => false]); ?>
                                                                <?php endif ?>

                                                                <?php if (!empty($partner->email)): ?>
                                                                    <?php echo $this->Html->link('<i class="dropdown-icon lnr-envelope"></i><span>' . $partner->email . '</span>', 'mailto:' . $partner->email, ['class' => 'dropdown-item', 'escape' => false]); ?>
                                                                <?php endif ?>

                                                                <?php if (!empty($partner->telegram)): ?>
                                                                    <?php echo $this->Html->link('<i class="dropdown-icon lnr-smartphone"></i><span>Telegram</span>', 'https://t.me/' . $partner->telegram, ['class' => 'dropdown-item', 'escape' => false]); ?>
                                                                <?php endif ?>

                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td style="vertical-align: top;">

                                                        <div class="dropdown d-inline-block">
                                                            <button type="button" aria-haspopup="true" aria-expanded="false"
                                                                data-bs-toggle="dropdown"
                                                                class="mb-2 me-2 dropdown-toggle btn btn-info">
                                                                <i class="pe-7s-config"></i>
                                                            </button>
                                                            <div tabindex="-1" role="menu" aria-hidden="true"
                                                                class="dropdown-menu-hover-link dropdown-menu" style="">
                                                                <?= $this->Form->postLink('<i class="dropdown-icon pe-7s-target"></i><span>Модуль разблокировать</span>', ['controller' => 'steps', 'action' => 'unlockmodule', $partner->id], ['confirm' => 'Вы уверены, что хотите разблокировать следующий модуль?', 'class' => 'dropdown-item', 'escape' => false]) ?>
                                                            </div>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <?php $counter++; ?>
                                            <?php endforeach; ?>
                                        <?php else: ?>
                                            <tr class="odd">
                                                <td colspan="5" style="vertical-align: top;">
                                                    В Вашей структуре ещё нет партнеров
                                                </td>
                                            </tr>
                                        <?php endif ?>
                                    </tbody>
                                    <tfoot>
                                        <tr role="row">
                                            <th rowspan="1" colspan="1">#</th>
                                            <th rowspan="1" colspan="1">ID</th>
                                            <th rowspan="1" colspan="1">Партнер</th>
                                            <th rowspan="1" colspan="1">Активность</th>
                                            <th rowspan="1" colspan="1">Контакт</th>
                                            <th rowspan="1" colspan="1">Действие</th>
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
                    <?= $this->element('support'); ?>
                </div>
                <div class="card-hover-shadow-2x mb-3 card">
                    <?= $this->element('downline/parent'); ?>
                </div>
            </div>
        </div>
    </div>
</div>