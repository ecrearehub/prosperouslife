<div class="app-header header-shadow bg-dark header-text-light">
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
    <div class="app-header__content">
        <div class="app-header-left">

        </div>
        <div class="app-header-right">
            <div class="header-btn-lg pe-0">
                <div class="widget-content p-0">
                    <div class="widget-content-wrapper">
                        <div class="widget-content-left">
                            <div class="btn-group">
                                <a data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                    <?php echo $this->Html->image($this->Url->build(['controller' => 'Users', 'action' => 'avatar']), ['width' => '42', 'alt' => 'image', 'class' => 'rounded-circle']); ?>
                                    <i class="fa fa-angle-down ms-2 opacity-8"></i>
                                </a>
                                <div tabindex="-1" role="menu" aria-hidden="true"
                                    class="rm-pointers dropdown-menu-lg dropdown-menu dropdown-menu-right">
                                    <div class="dropdown-menu-header">
                                        <div class="dropdown-menu-header-inner bg-info">
                                            <div class="menu-header-image opacity-2"
                                                style="background-image: url('<?php echo $this->Url->image('dropdown-header/city3.jpg') ?>');">
                                            </div>
                                            <div class="menu-header-content text-start">
                                                <div class="widget-content p-0">
                                                    <div class="widget-content-wrapper">
                                                        <div class="widget-content-left me-3">
                                                            <?php echo $this->Html->image($this->Url->build(['controller' => 'Users', 'action' => 'avatar']), ['width' => '42', 'alt' => 'image', 'class' => 'rounded-circle']); ?>
                                                        </div>
                                                        <div class="widget-content-left">
                                                            <div class="widget-heading">
                                                                <?= $this->Identity->get('first_name') ?>
                                                                <?= $this->Identity->get('last_name') ?>
                                                            </div>
                                                            <div class="widget-subheading opacity-8">
                                                                <?= $this->Identity->get('email') ?>
                                                            </div>
                                                        </div>
                                                        <div class="widget-content-right me-2">
                                                            <?php echo $this->Html->link('<button class="btn-pill btn-shadow btn-shine btn btn-focus">Выйти</button>', '/users/logout/', ['escape' => false]); ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="scroll-area-xs" style="height: 150px;">
                                        <div class="scrollbar-container ps">
                                            <ul class="nav flex-column">
                                                <li class="nav-item-header nav-item">
                                                    Мой аккаунт
                                                </li>
                                                <li class="nav-item">
                                                    <?php echo $this->Html->link('<i class="nav-link-icon pe-7s-id"></i> <span>Мой профиль</span>', '/users/profile/', ['class' => 'nav-link', 'escape' => false]); ?>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content-left  ms-3 header-user-info">
                            <div class="widget-heading">
                                <?= $this->Identity->get('first_name') ?>
                                <?= $this->Identity->get('last_name') ?>
                            </div>
                            <div class="widget-subheading"> VP People Manager</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>