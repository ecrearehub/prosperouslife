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
                        <div class="card-header-title font-size-lg text-capitalize fw-normal">
                            <i class="header-icon pe-7s-users icon-gradient bg-happy-itmeo"></i>
                            Ваши партнёры
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="text-right">
                            <?php echo $this->Html->link('<i class="pe-7s-add-user btn-icon-wrapper"></i> Пригласить', '/invitations/add/', ['class' => 'mb-2 me-2 btn btn-shadow btn-primary', 'escape' => false]); ?>
                            <?php echo $this->Html->link('<i class="pe-7s-users btn-icon-wrapper"></i> Organization chart', 'https://balkan.app/OrgChartJS/Demos/Assistant', ['target' => 'blank', 'class' => 'mb-2 me-2 btn btn-shadow btn-primary', 'escape' => false]); ?>
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
                                                        <div class="avatar-icon-wrapper">
                                                            <div class="avatar-icon">
                                                                <img src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMfaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkQ3MDQwMTFBRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkQ3MDQwMTE5RUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IE1hY2ludG9zaCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSI0RjBENjMzNUYyM0RFMUYwNjM4MTY4RTUyODFERkI3QSIgc3RSZWY6ZG9jdW1lbnRJRD0iNEYwRDYzMzVGMjNERTFGMDYzODE2OEU1MjgxREZCN0EiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwM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"
                                                                    alt="">
                                                            </div>
                                                        </div>
                                                        <?= $partner->first_name; ?>
                                                        <?= $partner->last_name; ?>
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
                                                                            <h6 class="menu-header-subtitle">Manage all of your
                                                                                options</h6>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <h6 tabindex="-1" class="dropdown-header">Aккаунт</h6>
                                                                <div>
                                                                    <span class="ms-3 badge rounded-pill bg-success">A</span>
                                                                    <span class="badge rounded-pill bg-danger">P</span>
                                                                    <span class="badge rounded-pill bg-danger">L</span>
                                                                </div>
                                                                <h6 tabindex="-1" class="dropdown-header">Kоманда</h6>
                                                                <h6 tabindex="-1" class="dropdown-header">План действий</h6>

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
                                                                            <h6 class="menu-header-subtitle">Manage all of your
                                                                                options</h6>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <button type="button" tabindex="0" class="dropdown-item">
                                                                    <i class="dropdown-icon lnr-inbox"></i>
                                                                    <span>012345674688</span>
                                                                </button>
                                                                <button type="button" tabindex="0" class="dropdown-item">
                                                                    <i class="dropdown-icon lnr-file-empty"></i>
                                                                    <span>ludajed@gmail.com</span>
                                                                </button>
                                                                <button type="button" tabindex="0" class="dropdown-item">
                                                                    <i class="dropdown-icon lnr-book"></i>
                                                                    <span>Telegram</span>
                                                                </button>
                                                                <button type="button" tabindex="0" class="dropdown-item">
                                                                    <i class="dropdown-icon lnr-book"></i>
                                                                    <span>WhatsApp</span>
                                                                </button>
                                                                <button type="button" tabindex="0" class="dropdown-item">
                                                                    <i class="dropdown-icon lnr-book"></i>
                                                                    <span>Facebook</span>
                                                                </button>
                                                                <div tabindex="-1" class="dropdown-divider"></div>

                                                                <?= $this->Html->image('vcard.png', ['alt' => 'vcard']); ?>

                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td style="vertical-align: top;">

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