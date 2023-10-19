<div class="card-header-tab card-header">
    <div class="card-header-title font-size-lg text-capitalize fw-normal">
        <i class="header-icon lnr-cloud-download icon-gradient bg-happy-itmeo"></i>
        Ваш спонсор
    </div>
</div>
<div class="p-0 card-body text-center">
    <?php echo $this->Html->image($this->Url->build(['controller' => 'Users', 'action' => 'avatar']), ['width' => '200', 'alt' => 'image', 'class' => 'm-3 rounded']); ?>


</div>
<div class="d-block card-footer">
    <table class="mb-0 table">
        <tbody>
            <tr>
                <th scope="row">Спонсор</th>
                <td>
                    Andreas Fries
                </td>
            </tr>
            <tr>
                <th scope="row">Активность</th>
                <td>
                    <div class="dropdown d-inline-block">
                        <button type="button" aria-haspopup="true" aria-expanded="false" data-bs-toggle="dropdown"
                            class="mb-2 me-2 dropdown-toggle btn btn-info">
                            <i class="pe-7s-rocket"></i>
                        </button>
                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-hover-link dropdown-menu"
                            style="">
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
            </tr>
            <tr>
                <th scope="row">Контакт</th>
                <td>
                    <div class="dropdown d-inline-block">
                        <button type="button" aria-haspopup="true" aria-expanded="false" data-bs-toggle="dropdown"
                            class="mb-2 me-2 dropdown-toggle btn btn-info">
                            <i class="pe-7s-mail"></i>
                        </button>
                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-hover-link dropdown-menu"
                            style="">
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
            </tr>
        </tbody>
    </table>
</div>