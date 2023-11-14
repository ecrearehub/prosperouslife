<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\User> $users
 */
?>

<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-id icon-gradient bg-mean-fruit"></i>
                </div>
                <div>
                    Мой аккаунт
                    <div class="page-title-subheading opacity-10">
                        <nav class="" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <?php echo $this->Html->link('<i aria-hidden="true" class="fa fa-home"></i>', '/users/dashboard/', ['escape' => false]); ?>
                                </li>
                                <li class="breadcrumb-item">
                                    <?php echo $this->Html->link('Мой профиль', '/users/profile/', ['escape' => false]); ?>
                                </li>
                                <li class="active breadcrumb-item" aria-current="page">
                                    Изменить пароль
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="page-title-actions">

            </div>
        </div>
    </div>

    <div class="tabs-animation">
        <div class="row">
            <div class="col-sm-12 col-lg-8">
                <div class="mb-3 card">
                    <div class="card-header-tab card-header">
                        <div class="card-header-title font-size-lg fw-normal" style="text-transform: none;">
                            <i class="header-icon pe-7s-shield icon-gradient bg-happy-itmeo"></i>
                            Изменить пароль
                        </div>
                    </div>
                    <div class="card-body">

                        <?php

                        if ($this->request->getSession()->read('Form.errors')) {
                            $errors = $this->request->getSession()->consume('Form.errors');
                        } else {
                            $errors = [];
                        }

                        ?>

                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12">

                                    <div class="alert alert-info fade show" role="alert">
                                        Поля, обозначенные значком * требуется обязательно заполнить.
                                    </div>

                                    <?= $this->Flash->render() ?>

                                    <?= $this->Form->create(null, ['url' => ['controller' => 'Users', 'action' => 'password']]); ?>


                                    <div class="row">
                                        <div class="col-sm-12">

                                            <div class="position-relative row mb-3">
                                                <?php
                                                if (count($errors)) {
                                                    if (array_key_exists('old_password', $errors)) {
                                                        $input_old_password_style = 'is-invalid';
                                                    } else {
                                                        $input_old_password_style = '';
                                                    }
                                                } else {
                                                    $input_old_password_style = '';
                                                }
                                                ?>
                                                <label for="old_password" class="form-label col-sm-4 col-form-label">
                                                    Старый пароль *
                                                </label>
                                                <div class="col-sm-8">
                                                    <?= $this->Form->control('old_password', ['type' => 'text', 'class' => 'form-control ' . $input_old_password_style, 'id' => 'old_password', 'autocomplete' => 'off', 'label' => false, 'required' => true]) ?>
                                                    <?php
                                                    if (count($errors)) {
                                                        if (array_key_exists('old_password', $errors)) {
                                                            foreach ($errors['old_password'] as $error) {
                                                                echo '<div class="error invalid-feedback" style="display:unset">' . $error . '</div>';
                                                            }
                                                        }
                                                    }
                                                    ?>
                                                </div>
                                            </div>
                                            <div class="position-relative row mb-3">
                                                <?php
                                                if (count($errors)) {
                                                    if (array_key_exists('password_password', $errors)) {
                                                        $input_password_password_style = 'is-invalid';
                                                    } else {
                                                        $input_password_password_style = '';
                                                    }
                                                } else {
                                                    $input_password_password_style = '';
                                                }
                                                ?>
                                                <label for="password_password"
                                                    class="form-label col-sm-4 col-form-label">
                                                    Новый пароль *
                                                </label>
                                                <div class="col-sm-8">
                                                    <?= $this->Form->control('password_password', ['type' => 'text', 'class' => 'form-control ' . $input_password_password_style, 'id' => 'password_password', 'autocomplete' => 'off', 'label' => false, 'required' => true]) ?>
                                                    <?php
                                                    if (count($errors)) {
                                                        if (array_key_exists('password_password', $errors)) {
                                                            foreach ($errors['password_password'] as $error) {
                                                                echo '<div class="error invalid-feedback" style="display:unset">' . $error . '</div>';
                                                            }
                                                        }
                                                    }
                                                    ?>
                                                </div>
                                            </div>
                                            <div class="position-relative row mb-3">
                                                <?php
                                                if (count($errors)) {
                                                    if (array_key_exists('password_confirm', $errors)) {
                                                        $input_password_confirm_style = 'is-invalid';
                                                    } else {
                                                        $input_password_confirm_style = '';
                                                    }
                                                } else {
                                                    $input_password_confirm_style = '';
                                                }
                                                ?>
                                                <label for="password_confirm"
                                                    class="form-label col-sm-4 col-form-label">
                                                    Новый пароль повторить *
                                                </label>
                                                <div class="col-sm-8">
                                                    <?= $this->Form->control('password_confirm', ['type' => 'text', 'class' => 'form-control ' . $input_password_confirm_style, 'id' => 'password_confirm', 'autocomplete' => 'off', 'label' => false, 'required' => true]) ?>
                                                    <?php
                                                    if (count($errors)) {
                                                        if (array_key_exists('password_confirm', $errors)) {
                                                            foreach ($errors['password_confirm'] as $error) {
                                                                echo '<div class="error invalid-feedback" style="display:unset">' . $error . '</div>';
                                                            }
                                                        }
                                                    }
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <?php echo $this->Form->button('<i class="lnr-cog"></i>  Сохранить изменения', ['class' => 'mt-4 mb-2 me-2 btn btn-shadow btn-primary', 'escapeTitle' => false]); ?>
                                    <?php echo $this->Html->link('<i class="lnr-cross-circle"></i> Отменить', '/users/profile/', ['class' => 'mt-4 mb-2 me-2 btn btn-shadow btn-light', 'escape' => false]); ?>

                                    <?= $this->Form->end() ?>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-lg-4">
                <div class="card-hover-shadow-2x mb-3 card">
                    <?php echo $this->element('support'); ?>
                </div>
            </div>
        </div>
    </div>
</div>