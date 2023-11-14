<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Step> $steps
 */
?>

<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-target icon-gradient bg-mean-fruit"></i>
                </div>
                <div>
                    <?= $stepId ?>. Шаг
                    <div class="page-title-subheading opacity-10">
                        <nav class="" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <?php echo $this->Html->link('<i aria-hidden="true" class="fa fa-home"></i>', '/users/dashboard/', ['escape' => false]); ?>
                                </li>
                                <li class="breadcrumb-item">
                                    <a>План действий</a>
                                </li>
                                <li class="active breadcrumb-item" aria-current="page">
                                    <?= $stepId ?>. Шаг
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

                <div class="main-card mb-3 card">
                    <div class="card-header font-size-lg fw-normal" style="text-transform: none;">
                        <i class="header-icon lnr-menu icon-gradient bg-plum-plate"></i>
                        <?= $stepId ?>. Шаг
                        <div class="btn-actions-pane-right actions-icon-btn">
                            <?php if ($user->step_id == 7 and $user->step_status_id == 1): ?>
                                <div class="">
                                    <?= $this->Form->postLink('<button class="btn btn-primary">Отметить модуль как завершенный</button>', ['action' => 'check', $stepId], ['confirm' => 'Вы уверены, что хотите отметить модуль как завершенный?', 'escape' => false]) ?>
                                </div>
                            <?php endif ?>
                            <?php if ($user->step_id == 7 and $user->step_status_id == 2): ?>
                                <button class="btn btn-warning">
                                    Проверяется
                                </button>
                            <?php endif ?>
                            <?php if ($user->step_id == 7 and $user->step_status_id == 3): ?>
                                <button class="btn btn-success">
                                    Модуль успешно пройден
                                </button>
                            <?php endif ?>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="text-center p-5">
                            <iframe width="560" height="315"
                                src="https://www.youtube.com/embed/videoseries?si=JZOXA0f3xGGd9gWz&amp;list=PLdE7uo_7KBkf6X1lbOpL3tAWERvlYej2L"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen>
                            </iframe>
                        </div>

                        <p>
                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                            invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam
                            et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est
                            Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                            diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam
                            voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd
                            gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit
                            amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et
                            dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores
                            et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit
                            amet.
                        </p>
                        <p>
                            Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel
                            illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui
                            blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem
                            ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt
                            ut laoreet dolore magna aliquam erat volutpat.
                        </p>

                        <p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl
                            ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in
                            vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero
                            eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue
                            duis dolore te feugait nulla facilisi.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-lg-4">
                <div class="card-hover-shadow-2x mb-3 card">
                    <?= $this->element('support'); ?>
                </div>
                <div class="card-hover-shadow-2x mb-3 card">
                    <?= $this->element('steps/downloads/' . $stepId); ?>
                </div>
            </div>
        </div>
    </div>
</div>