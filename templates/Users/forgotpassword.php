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
                            <span class="d-block">Запросить новый пароль</span>
                            <span>Введите ваш адрес электронной почты. Новый пароль будет отправлен вам по электронной почте
                                 немедленно.</span>
                        </h4>
                        <div class="divider row"></div>
                        <div>
                            <?php echo $this->Flash->render(); ?>
                            <?php echo $this->Form->create(); ?>
                            <div class="">
                                <div class="col-md-6">
                                    <div class="position-relative mb-3">
                                        <label for="exampleEmail" class="form-label">Электронная почта</label>
                                        <?php echo $this->Form->control('email', ['class' => 'form-control', 'id' => 'email', 'placeholder' => 'Электронная почта', 'label' => false, 'required' => true]); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="divider row"></div>
                            <div class="d-flex align-items-center">
                                <div class="ms-auto">
                                    <?php echo $this->Html->link('Вернуться на страницу авторизации', '/users/login/', ['class' => 'btn-lg btn btn-link']); ?>
                                    <?php echo $this->Form->button('Восстановить пароль', ['class' => 'btn btn-primary btn-lg']); ?>
                                </div>
                            </div>
                            <?php echo $this->Form->end(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>