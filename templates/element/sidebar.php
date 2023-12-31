<div class="app-sidebar sidebar-shadow bg-dark sidebar-text-light">
    <div class="app-header__logo">
        <div class="logo-src"></div>
        <div class="header__pane ms-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic"
                    data-class="closed-sidebar">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
    </div>
    <div class="app-header__menu">
        <span>
            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                <span class="btn-icon-wrapper">
                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                </span>
            </button>
        </span>
    </div>
    <div class="scrollbar-sidebar">
        <div class="app-sidebar__inner">

            <ul class="vertical-nav-menu">
                <li class="app-sidebar__heading"></li>
                <li>
                    <?php echo $this->Html->link('<i class="metismenu-icon pe-7s-home"></i> Главная', '/users/dashboard/', ['class' => $this->Link->getStyle('dashboard', $this->request->getAttribute('params')), 'escape' => false]); ?>
                </li>
                <?php if ($this->Identity->get('step_id') == 6 and $this->Identity->get('step_status_id') == 3): ?>
                    <li class=<?= $this->Link->getStyle('conferences', $this->request->getAttribute('params')); ?>>
                        <a href="#">
                            <i class="metismenu-icon pe-7s-display2"></i>
                            Презентации
                            <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                        </a>
                        <ul>
                            <li>
                                <?php echo $this->Html->link('<i class="metismenu-icon"></i> Расписание вебинаров', '/conferences/webinars/', ['class' => $this->Link->getStyle('webinars', $this->request->getAttribute('params')), 'escape' => false]); ?>
                            </li>
                            <li>
                                <?php echo $this->Html->link('<i class="metismenu-icon"></i> Расписание презентаций', '/conferences/presentations/', ['class' => $this->Link->getStyle('presentations', $this->request->getAttribute('params')), 'escape' => false]); ?>
                            </li>
                            <li>
                                <?php echo $this->Html->link('<i class="metismenu-icon"></i> Записи', '/conferences/recordings/', ['class' => $this->Link->getStyle('recordings', $this->request->getAttribute('params')), 'escape' => false]); ?>
                            </li>
                        </ul>
                    </li>
                <?php endif ?>
                <?php if ($this->Identity->get('step_id') == 6 and $this->Identity->get('step_status_id') == 3): ?>
                    <li>
                        <?php echo $this->Html->link('<i class="metismenu-icon pe-7s-news-paper"></i> Новости', '/news/index/', ['class' => $this->Link->getStyle('news', $this->request->getAttribute('params')), 'escape' => false]); ?>
                    </li>
                <?php endif ?>
                <li class="app-sidebar__heading">Do Action</li>
                <li class=<?= $this->Link->getStyle('steps', $this->request->getAttribute('params')); ?>>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-target"></i>
                        План действий
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <?php echo $this->Html->link('<i class="metismenu-icon"></i> 1. Шаг', '/steps/index/1', ['class' => $this->Link->getStyle('1', $this->request->getAttribute('params'), '1'), 'escape' => false]); ?>
                        </li>
                        <li>
                            <?php echo $this->Html->link('<i class="metismenu-icon"></i> 2. Шаг', '/steps/index/2', ['class' => $this->Link->getStyle('2', $this->request->getAttribute('params'), '2'), 'escape' => false]); ?>
                        </li>
                        <li>
                            <?php echo $this->Html->link('<i class="metismenu-icon"></i> 3. Шаг', '/steps/index/3', ['class' => $this->Link->getStyle('3', $this->request->getAttribute('params'), '3'), 'escape' => false]); ?>
                        </li>
                        <li>
                            <?php echo $this->Html->link('<i class="metismenu-icon"></i> 4. Шаг', '/steps/index/4', ['class' => $this->Link->getStyle('4', $this->request->getAttribute('params'), '4'), 'escape' => false]); ?>
                        </li>
                        <li>
                            <?php echo $this->Html->link('<i class="metismenu-icon"></i> 5. Шаг', '/steps/index/5', ['class' => $this->Link->getStyle('5', $this->request->getAttribute('params'), '5'), 'escape' => false]); ?>
                        </li>
                        <li>
                            <?php echo $this->Html->link('<i class="metismenu-icon"></i> 6. Шаг', '/steps/index/6', ['class' => $this->Link->getStyle('6', $this->request->getAttribute('params'), '6'), 'escape' => false]); ?>
                        </li>
                    </ul>
                </li>
                <?php if ($this->Identity->get('step_id') == 6 and $this->Identity->get('step_status_id') == 3): ?>
                    <li class=<?= $this->Link->getStyle('team', $this->request->getAttribute('params')); ?>>
                        <a href="#">
                            <i class="metismenu-icon pe-7s-users"></i>
                            Моя команда
                            <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                        </a>
                        <ul>
                            <li>
                                <?php echo $this->Html->link('<i class="metismenu-icon"></i> Cтруктура', '/users/downline/', ['class' => $this->Link->getStyle('downline', $this->request->getAttribute('params')), 'escape' => false]); ?>
                            </li>
                            <li>
                                <?php echo $this->Html->link('<i class="metismenu-icon"></i> Пригласить', '/invitations/index/', ['class' => $this->Link->getStyle('invitations', $this->request->getAttribute('params')), 'escape' => false]); ?>
                            </li>
                            <li>
                                <?php echo $this->Html->link('<i class="metismenu-icon"></i> Рекламный материал', '/pages/advertising_resources/', ['class' => $this->Link->getStyle('advertisingresources', $this->request->getAttribute('params')), 'escape' => false]); ?>
                            </li>
                        </ul>
                    </li>
                <?php endif ?>

                <li class="app-sidebar__heading">Нужна помощь?</li>
                <?php if ($this->Identity->get('step_id') == 6 and $this->Identity->get('step_status_id') == 3): ?>
                    <li>
                        <?php echo $this->Html->link('<i class="metismenu-icon pe-7s-user"></i> Спросите спонсора', '/users/downline/', ['class' => '', 'escape' => false]); ?>
                    </li>
                <?php else: ?>
                    <li>
                        <?php echo $this->Html->link('<i class="metismenu-icon pe-7s-user"></i> Спросите спонсора', '/users/profile/', ['class' => '', 'escape' => false]); ?>
                    </li>
                <?php endif ?>
                <li>
                    <?php echo $this->Html->link('<i class="metismenu-icon pe-7s-help2"></i> Спросите нас', 'javascript:void(Tawk_API.toggle())', ['class' => '', 'escape' => false]); ?>
                </li>
                <?php if ($this->Identity->get('step_id') == 6 and $this->Identity->get('step_status_id') == 3): ?>
                    <li>
                        <?php echo $this->Html->link('<i class="metismenu-icon pe-7s-study"></i> Вопросы-ответы', 'https://prosperouslife.tawk.help', ['class' => '', 'target' => 'blank', 'escape' => false]); ?>
                    </li>
                    <li>
                        <?php echo $this->Html->link('<i class="metismenu-icon pe-7s-chat"></i> Telegram чат', 'https://prosperouslife.tawk.help', ['class' => '', 'target' => 'blank', 'escape' => false]); ?>
                    </li>
                <?php endif ?>
            </ul>
        </div>
    </div>
</div>