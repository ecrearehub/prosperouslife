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
                    <?php echo $this->Html->link('<i class="metismenu-icon pe-7s-home"></i> Главная', '/users/dashboard/', ['class' => 'mm-active', 'escape' => false]); ?>
                </li>
                <li>
                    <?php echo $this->Html->link('<i class="metismenu-icon pe-7s-display2"></i> Презентации', '/conferences/index/', ['class' => '', 'escape' => false]); ?>
                </li>
                <li>
                    <?php echo $this->Html->link('<i class="metismenu-icon pe-7s-news-paper"></i> Новости', '/news/index/', ['class' => '', 'escape' => false]); ?>
                </li>
                <li class="app-sidebar__heading">Do Action</li>
                <li class="mm-active">
                    <a href="#">
                        <i class="metismenu-icon pe-7s-leaf"></i>
                        Leave a Legacy
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <?php echo $this->Html->link('<i class="metismenu-icon"></i> My Legacy', '/donations/', ['class' => '', 'escape' => false]); ?>
                        </li>
                        <li>
                            <?php echo $this->Html->link('<i class="metismenu-icon"></i> Projekts', '/donations/', ['class' => '', 'escape' => false]); ?>
                        </li>
                        <li>
                            <?php echo $this->Html->link('<i class="metismenu-icon"></i> My Trees', '/donations/', ['class' => '', 'escape' => false]); ?>
                        </li>
                        <li>
                            <?php echo $this->Html->link('<i class="metismenu-icon"></i> Sponsor a Tree', '/donations/', ['class' => '', 'escape' => false]); ?>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-users"></i>
                        Моя команда
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <?php echo $this->Html->link('<i class="metismenu-icon"></i> Моя команда', '/#/', ['class' => '', 'escape' => false]); ?>
                        </li>
                        <li>
                            <?php echo $this->Html->link('<i class="metismenu-icon"></i> Пригласить', '/#/', ['class' => '', 'escape' => false]); ?>
                        </li>
                        <li>
                            <?php echo $this->Html->link('<i class="metismenu-icon"></i> Рекламный материал', '/#/', ['class' => '', 'escape' => false]); ?>
                        </li>
                    </ul>
                </li>


                <li class="app-sidebar__heading">Помощь</li>
                <li>
                    <?php echo $this->Html->link('<i class="metismenu-icon pe-7s-help2"></i> Служба поддержки', '/#/', ['class' => '', 'escape' => false]); ?>
                </li>
                <li>
                    <?php echo $this->Html->link('<i class="metismenu-icon pe-7s-study"></i> Вопросы-ответы', '/#/', ['class' => '', 'escape' => false]); ?>
                </li>
            </ul>
        </div>
    </div>
</div>