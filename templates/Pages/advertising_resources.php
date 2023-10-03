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
                    Рекламный материал
                    <div class="page-title-subheading opacity-10">
                        <nav class="" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <?php echo $this->Html->link('<i aria-hidden="true" class="fa fa-home"></i>', '/users/dashboard/', ['escape' => false]); ?>
                                </li>
                                <li class="breadcrumb-item">
                                    <a>Моя команда </a>
                                </li>
                                <li class="active breadcrumb-item" aria-current="page">
                                    Рекламный материал
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
                            Squeezepage
                        </div>
                    </div>
                    <div class="card-body">

                        <div class="row">
                            <div class="col-sm-12">
                                <table style="width: 100%;" class="table table-hover">
                                    <thead>
                                        <tr role="row">
                                            <th rowspan="1" colspan="1">#</th>
                                            <th rowspan="1" colspan="1">Язык</th>
                                            <th rowspan="1" colspan="1">Изображение</th>
                                            <th rowspan="1" colspan="1">Cсылка</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="odd">
                                            <td style="vertical-align: top;">
                                                1
                                            </td>
                                            <td style="vertical-align: top;">
                                                Русский
                                            </td>
                                            <td style="vertical-align: top;">
                                                <?php echo $this->Html->image('/img/advertising-resources/sp1_ru.png', ['width' => '300', 'alt' => 'image']); ?>
                                            </td>
                                            <td style="vertical-align: top;">
                                                <?php echo $this->Html->link('https://prosperouslife.club/?r=' . $this->Identity->get('id'), 'https://prosperouslife.club/?r=' . $this->Identity->get('id'), ['target' => 'blank']); ?>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th rowspan="1" colspan="1">#</th>
                                            <th rowspan="1" colspan="1">Язык</th>
                                            <th rowspan="1" colspan="1">Изображение</th>
                                            <th rowspan="1" colspan="1">Cсылка</th>
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
            </div>
        </div>
    </div>
</div>