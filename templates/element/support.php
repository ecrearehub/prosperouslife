<div class="card-header-tab card-header">
    <div class="card-header-title font-size-lg fw-normal" style="text-transform: none;">
        <i class="header-icon pe-7s-help1 icon-gradient bg-amy-crisp"></i>
        Нужна помощь?
    </div>

</div>
<div class="card-body">
    <div class="row">
        <div class="col-sm-6 col-xl-4">
            <div class="d-grid">
                <?php if ($this->Identity->get('step_id') == 6 and $this->Identity->get('step_status_id') == 3): ?>
                    <a href="/users/downline">
                        <button class="btn-icon-vertical mb-3 btn-transition btn btn-outline-primary">
                            <i class="pe-7s-user btn-icon-wrapper"> </i>
                            <span class="badge bg-primary badge-dot badge-dot-sm badge-dot-inside"></span>
                            Спросите спонсора
                        </button>
                    </a>
                <?php else: ?>
                    <a href="/users/profile">
                        <button class="btn-icon-vertical mb-3 btn-transition btn btn-outline-primary">
                            <i class="pe-7s-user btn-icon-wrapper"> </i>
                            <span class="badge bg-primary badge-dot badge-dot-sm badge-dot-inside"></span>
                            Спросите спонсора
                        </button>
                    </a>
                <?php endif ?>
            </div>
        </div>
        <div class="col-sm-6 col-xl-4">
            <div class="d-grid">
                <a href="javascript:void(Tawk_API.toggle())">
                    <button class="btn-icon-vertical mb-3 btn-transition btn btn-outline-primary">
                        <i class="pe-7s-help2 btn-icon-wrapper"> </i>
                        <span class="badge bg-primary badge-dot badge-dot-sm badge-dot-inside"></span>
                        Спросите нас
                    </button>
                </a>
            </div>
        </div>
        <?php if ($this->Identity->get('step_id') == 6 and $this->Identity->get('step_status_id') == 3): ?>
            <div class="col-sm-6 col-xl-4">
                <div class="d-grid">
                    <a href="https://prosperouslife.tawk.help" target="blank">
                        <button class="btn-icon-vertical mb-3 btn-transition btn btn-outline-primary">
                            <i class="pe-7s-study btn-icon-wrapper"> </i>
                            <span class="badge bg-primary badge-dot badge-dot-sm badge-dot-inside"></span>
                            Вопросы-ответы
                        </button>
                    </a>
                </div>
            </div>
            <div class="col-sm-6 col-xl-4">
                <div class="d-grid">
                    <button class="btn-icon-vertical mb-3 btn-transition btn btn-outline-primary">
                        <i class="pe-7s-chat btn-icon-wrapper"> </i>
                        <span class="badge bg-primary badge-dot badge-dot-sm badge-dot-inside"></span>
                        Telegram чат
                    </button>
                </div>
            </div>
        <?php endif ?>
    </div>
</div>