<div class="app-container app-theme-white body-tabs-shadow">
    <div class="app-container">
        <div class="h-100">
            <div class="h-100 g-0 row">
                <div class="d-none d-lg-block col-lg-4">
                    <?php echo $this->element('login/slider'); ?>
                </div>
                <div class="h-100 d-flex bg-white justify-content-center align-items-center col-md-12 col-lg-8">
                    <div class="mx-auto app-login-box col-sm-12 col-md-10 col-lg-9">
                        <div class="app-logo"></div>
                        <h4 class="mb-0">
                            <span class="d-block">Проблемы входa на сайт?</span>
                        </h4>
                        <div class="divider row"></div>
                        <div>
                            <strong>1 Запросить новый пароль</strong>
                            <p>Если после нажатия на ссылку "Подтвердить регистрацию" Вы не можете войти в систему. Вы можете запросить
                                <strong>
                                    <?php echo $this->Html->link('новый пароль', '/users/forgotpassword/'); ?>
                                </strong>.</p>

                            <strong>2 Верхний / Нижний Регистр</strong>
                            <p>При вводе пароля обратите внимание, верхний / нижний регистр! (большие/маленькие буквы)</p>

                            <strong>3 Активируйте Cookies</strong>
                            <p>Для обеспечения безопасности в области входа, используются Cookies (куки). Они предназначены для Вашей безопасности и не имеют ничего общего со сбором данных. <a
                                    href="https://support.google.com/accounts/answer/61416"
                                    target="blank"><strong>Читайте здесь, как включить куки для вашего браузера</strong></a>.
                            </p>
                            <strong>4 Есть Вопросы?</strong>
                            <p>Отправте нам сообщение на E-Mail support@prosperouslife.club. Пожалуйста сообщите Ваш Партнер ID.</p>
                        </div>
                        <div class="divider row"></div>
                        <div class="d-flex align-items-center">
                            <div class="ms-auto">
                                <?php echo $this->Html->link('Вернуться на страницу авторизации', '/users/login/', ['class' => 'btn btn-primary btn-lg']); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>