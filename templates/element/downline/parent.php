<div class="card-header-tab card-header">
    <div class="card-header-title font-size-lg fw-normal" style="text-transform: none;">
        <i class="header-icon pe-7s-user icon-gradient bg-happy-itmeo"></i>
        Ваш спонсор
    </div>
</div>
<div class="p-0 card-body text-center">
    <?php echo $this->Html->image($this->Url->build(['controller' => 'Users', 'action' => 'avatar/' . $parent->id]), ['width' => '200', 'alt' => 'image', 'class' => 'mt-4 mb-4 img-thumbnail rounded-circle shadow-sm']); ?>
</div>
<div class="d-block card-footer">
    <table class="mb-0 table">
        <tbody>
            <tr>
                <th scope="row">Спонсор</th>
                <td>
                    <?= $parent->first_name; ?>
                    <?= $parent->last_name; ?>
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
                                    </div>
                                </div>
                            </div>
                            <h6 tabindex="-1" class="dropdown-header">Aккаунт</h6>
                            <div>
                                <?php if ($parent->activated == 1): ?>
                                    <span class="ms-3 badge rounded-pill bg-success">A</span>
                                <?php else: ?>
                                    <span class="ms-3 badge rounded-pill bg-danger">A</span>
                                <?php endif ?>

                                <?php if ($parent->terms == 1): ?>
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
                                <?php if ($parent->step_id >= 2): ?>
                                    <span class="ms-3 badge rounded-pill bg-success">1</span>
                                <?php else: ?>
                                    <span class="ms-3 badge rounded-pill bg-danger">1</span>
                                <?php endif ?>

                                <?php if ($parent->step_id >= 3): ?>
                                    <span class="badge rounded-pill bg-success">2</span>
                                <?php else: ?>
                                    <span class="badge rounded-pill bg-danger">2</span>
                                <?php endif ?>

                                <?php if ($parent->step_id >= 4): ?>
                                    <span class="badge rounded-pill bg-success">3</span>
                                <?php else: ?>
                                    <span class="badge rounded-pill bg-danger">3</span>
                                <?php endif ?>

                                <?php if ($parent->step_id >= 5): ?>
                                    <span class="badge rounded-pill bg-success">4</span>
                                <?php else: ?>
                                    <span class="badge rounded-pill bg-danger">4</span>
                                <?php endif ?>

                                <?php if ($parent->step_id >= 6): ?>
                                    <span class="badge rounded-pill bg-success">5</span>
                                <?php else: ?>
                                    <span class="badge rounded-pill bg-danger">5</span>
                                <?php endif ?>

                                <?php if ($parent->step_id == 6 and $parent->step_status_id == 3): ?>
                                    <span class="badge rounded-pill bg-success">6</span>
                                <?php else: ?>
                                    <span class="badge rounded-pill bg-danger">6</span>
                                <?php endif ?>

                            </div>
                        </div>
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
            <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-hover-link dropdown-menu" style="">
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
                <?php if (!empty($parent->phone)): ?>
                    <?php echo $this->Html->link('<i class="dropdown-icon lnr-phone"></i><span>' . $parent->phone . '</span>', 'tel:' . $parent->phone, ['class' => 'dropdown-item', 'escape' => false]); ?>
                <?php endif ?>

                <?php if (!empty($parent->email)): ?>
                    <?php echo $this->Html->link('<i class="dropdown-icon lnr-envelope"></i><span>' . $parent->email . '</span>', 'mailto:' . $parent->email, ['class' => 'dropdown-item', 'escape' => false]); ?>
                <?php endif ?>

                <?php if (!empty($parent->telegram)): ?>
                    <?php echo $this->Html->link('<i class="dropdown-icon lnr-smartphone"></i><span>Telegram</span>', 'https://t.me/' . $parent->telegram, ['class' => 'dropdown-item', 'escape' => false]); ?>
                <?php endif ?>

            </div>
        </div>

    </td>
</tr>
</tbody>
</table>
</div>