<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>

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
                            <span class="d-block">Активация вашего аккаунта</span>
                        </h4>
                        <div class="divider row"></div>
                        <div>
                            <?php echo $this->Flash->render(); ?>
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