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
                                    <span class="d-block">Добро пожаловать,</span>
                                    <span>пожалуйста, войдите в ваш аккаунт.</span>
                                </h4>                                
                                <div class="divider row"></div>
                                <div>
                                    <?php echo $this->Flash->render(); ?>
                                    <?php echo $this->Form->create(); ?>
                                        <div class="">
                                            <div class="col-md-6">
                                                <div class="position-relative mb-3">
                                                    <label for="exampleEmail" class="form-label">Имя пользователя</label>
                                                    <?php echo $this->Form->control('username', ['class' => 'form-control', 'id' => 'username', 'placeholder' => 'Имя пользователя', 'label' => false, 'required' => true]); ?>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="position-relative mb-3">
                                                    <label for="examplePassword" class="form-label">Пароль</label>                                                    
                                                    <?php echo $this->Form->control('password', ['class' => 'form-control', 'id' => 'password', 'placeholder' => 'Пароль', 'autocomplete' => 'off', 'label' => false, 'required' => true]); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <?php /*
                                        <div class="position-relative form-check mb-3">
                                            <input name="check" id="exampleCheck" type="checkbox" class="form-check-input">
                                            <label for="exampleCheck" class="form-label form-check-label">Keep me logged in</label>
                                        </div>
                                        */ ?>
                                        <div class="divider row"></div>
                                        <div class="d-flex align-items-center">
                                            <div class="ms-auto">
                                                <?php echo $this->Html->link(' Проблемы входa на сайт?', '/users/problemswithlogin/', ['class' => 'btn-lg btn btn-link']); ?>
                                                <?php echo $this->Form->button('Вход', ['class' => 'btn btn-primary btn-lg']); ?>
                                            </div>
                                        </div>
                                    <?php echo $this->Form->end(); ?>
                                    <div class="text-center text-muted opacity-8 mt-3">
                                        Copyright © 2023 PROSPEROUS LIFE CLUB. All rights reserved
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>