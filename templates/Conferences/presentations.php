<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Conference> $conferences
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
                    Презентации
                    <div class="page-title-subheading opacity-10">
                        <nav class="" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <?php echo $this->Html->link('<i aria-hidden="true" class="fa fa-home"></i>', '/users/dashboard/', ['escape' => false]); ?>
                                </li>
                                <li class="breadcrumb-item">
                                    <a>Презентации</a>
                                </li>
                                <li class="active breadcrumb-item" aria-current="page">
                                    Расписание презентаций
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
                            Расписание презентаций
                        </div>
                    </div>
                    <div class="card-body">

                        <div class="row">
                            <div class="col-sm-12">
                                <table style="width: 100%;" class="table table-hover">
                                    <thead>
                                        <tr role="row">
                                            <th rowspan="1" colspan="1">Дата</th>
                                            <th rowspan="1" colspan="1">Время</th>
                                            <th rowspan="1" colspan="1">Часовой пояс</th>
                                            <th rowspan="1" colspan="1">Язык</th>
                                            <th rowspan="1" colspan="1">Oписание</th>
                                            <th rowspan="1" colspan="1">Действия</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($conferences as $conference): ?>
                                            <tr class="odd">
                                                <td style="vertical-align: top;">
                                                    <?= date_format($conference->created, "d.m.Y"); ?>
                                                </td>
                                                <td style="vertical-align: top;">
                                                    <?= date_format($conference->created, "H:m"); ?>
                                                </td>
                                                <td style="vertical-align: top;">
                                                    <?= $conference->conference_timezone->name; ?>
                                                </td>
                                                <td style="vertical-align: top;">
                                                    <?= $conference->language->name; ?>
                                                </td>
                                                <td style="vertical-align: top;">
                                                    <?= $conference->description; ?>
                                                </td>
                                                <td style="vertical-align: top;">
                                                    <div class="dropdown d-inline-block">
                                                        <button type="button" aria-haspopup="true" aria-expanded="false"
                                                            data-bs-toggle="dropdown"
                                                            class="mb-2 me-2 dropdown-toggle btn btn-shadow btn-light">
                                                            <i class="fa fa-fw" aria-hidden="true"
                                                                title="Copy to use gear"></i>
                                                        </button>
                                                        <div tabindex="-1" role="menu" aria-hidden="true"
                                                            class="dropdown-menu" style="">
                                                            <?php echo $this->Html->link('<i class="fa fa-fw" aria-hidden="true"></i>&nbsp;Войтина конференцию', $conference->url, ['target' => 'blank', 'class' => 'dropdown-item', 'escape' => false]); ?>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th rowspan="1" colspan="1">Дата</th>
                                            <th rowspan="1" colspan="1">Время</th>
                                            <th rowspan="1" colspan="1">Часовой пояс</th>
                                            <th rowspan="1" colspan="1">Язык</th>
                                            <th rowspan="1" colspan="1">Oписание</th>
                                            <th rowspan="1" colspan="1">Действия</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <div class="dataTables_info" id="example_info" role="status" aria-live="polite">
                                    <?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <ul class="pagination">
                                    <?= $this->Paginator->first(__('<<')) ?>
                                    <?= $this->Paginator->prev(__('<')) ?>
                                    <?= $this->Paginator->numbers() ?>
                                    <?= $this->Paginator->next(__('>')) ?>
                                    <?= $this->Paginator->last(__('>>')) ?>
                                </ul>
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
                    <?php echo $this->element('conferences/webinars/statistics'); ?>
                </div>
            </div>
        </div>
    </div>
</div>