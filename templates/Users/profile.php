<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Conference> $conferences
 */
?>

<?php //debug($invitations); ?>

<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-display2 icon-gradient bg-mean-fruit"></i>
                </div>
                <div>
                    Пригласить
                    <div class="page-title-subheading opacity-10">
                        <nav class="" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <?php echo $this->Html->link('<i aria-hidden="true" class="fa fa-home"></i>', '/users/dashboard/', ['escape' => false]); ?>
                                </li>
                                <li class="breadcrumb-item">
                                    <a>Моя команда</a>
                                </li>
                                <li class="active breadcrumb-item" aria-current="page">
                                    Пригласить
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

    <?php

    if ($this->request->getSession()->read('Form.errors')) {
        $errors = $this->request->getSession()->consume('Form.errors');
    } else {
        $errors = [];
    }

    ?>

    <div class="tabs-animation">
        <div class="row">
            <div class="col-sm-12 col-lg-8">
                <div class="mb-3 card">
                    <div class="card-header-tab card-header">
                        <div class="card-header-title font-size-lg text-capitalize fw-normal">
                            <i class="header-icon lnr-menu icon-gradient bg-happy-itmeo"></i>
                            Пригласить
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
                                <div class="col-sm-4">
                                    <h5 class="card-title mt-4">Фотография профиля</h5>

                                    <hr>

                                    <div class="container text-center">
                                        <?= $this->Html->image($this->Url->build(['controller' => 'Users', 'action' => 'avatar']), ['width' => '200', 'alt' => 'image', 'class' => 'img-thumbnail rounded-circle shadow-sm']); ?>
                                    </div>

                                </div>
                                <div class="col-sm-8">

                                    <?= $this->Flash->render() ?>

                                    <?= $this->Form->create($user) ?>

                                    <h5 class="card-title mt-4">Aккаунт информация</h5>

                                    <hr>

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="position-relative row mb-3">
                                                <label for="user-id" class="form-label col-sm-4 col-form-label">Партнер
                                                    ID</label>
                                                <div class="col-sm-8">
                                                    <?= $this->Identity->get('id') ?>
                                                </div>
                                            </div>
                                            <div class="position-relative row mb-3">
                                                <label for="created" class="form-label col-sm-4 col-form-label">Дата
                                                    регистрации</label>
                                                <div class="col-sm-8">
                                                    <?= date_format($this->Identity->get('created'), "d.m.Y"); ?>
                                                </div>
                                            </div>

                                            <div class="position-relative row mb-3">
                                                <?php
                                                if (count($errors)) {
                                                    if (array_key_exists('username', $errors)) {
                                                        $input_username_style = 'is-invalid';
                                                    } else {
                                                        $input_username_style = '';
                                                    }
                                                } else {
                                                    $input_username_style = '';
                                                }
                                                ?>
                                                <label for="username" class="form-label col-sm-4 col-form-label">Имя
                                                    пользователя</label>
                                                <div class="col-sm-8">
                                                    <?= $this->Form->control('username', ['type' => 'text', 'class' => 'form-control ' . $input_username_style, 'id' => 'username', 'autocomplete' => 'off', 'label' => false, 'required' => true]) ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <h5 class="card-title mt-4">Личная информация</h5>

                                    <hr>

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="position-relative row mb-3">
                                                <label for="user-id"
                                                    class="form-label col-sm-4 col-form-label">Имя</label>
                                                <div class="col-sm-8">
                                                    <?= $this->Identity->get('first_name') ?>
                                                </div>
                                            </div>
                                            <div class="position-relative row mb-3">
                                                <label for="created"
                                                    class="form-label col-sm-4 col-form-label">Фамилияs</label>
                                                <div class="col-sm-8">
                                                    <?= $this->Identity->get('last_name') ?>
                                                </div>
                                            </div>

                                            <div class="position-relative row mb-3">
                                                <?php
                                                if (count($errors)) {
                                                    if (array_key_exists('birthday', $errors)) {
                                                        $input_birthday_style = 'is-invalid';
                                                    } else {
                                                        $input_birthday_style = '';
                                                    }
                                                } else {
                                                    $input_birthday_style = '';
                                                }
                                                ?>
                                                <label for="username" class="form-label col-sm-4 col-form-label">Дата
                                                    рождения</label>
                                                <div class="col-sm-8">
                                                    <?= $this->Form->date('birthday', ['class' => 'form-control ' . $input_birthday_style, 'id' => 'birthday', 'autocomplete' => 'off', 'label' => false, 'required' => true]) ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <h5 class="card-title mt-4">Ваш адрес</h5>

                                    <hr>

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="position-relative row mb-3">
                                                <?php
                                                if (count($errors)) {
                                                    if (array_key_exists('country_id', $errors)) {
                                                        $input_country_id_style = 'is-invalid';
                                                    } else {
                                                        $input_country_id_style = '';
                                                    }
                                                } else {
                                                    $input_country_id_style = '';
                                                }
                                                ?>
                                                <label for="country_id" class="form-label col-sm-4 col-form-label">
                                                    Страна
                                                </label>
                                                <div class="col-sm-8">
                                                    <?= $this->Form->control('country_id', ['options' => $countries, 'class' => 'form-select ' . $input_country_id_style, 'id' => 'country_id', 'autocomplete' => 'off', 'label' => false, 'required' => true]) ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="position-relative row mb-3">
                                                <?php
                                                if (count($errors)) {
                                                    if (array_key_exists('address', $errors)) {
                                                        $input_address_style = 'is-invalid';
                                                    } else {
                                                        $input_address_style = '';
                                                    }
                                                } else {
                                                    $input_address_style = '';
                                                }
                                                ?>
                                                <label for="address" class="form-label col-sm-4 col-form-label">
                                                    Улица, дом, кор. кв.
                                                </label>
                                                <div class="col-sm-8">
                                                    <?= $this->Form->control('address', ['class' => 'form-control ' . $input_address_style, 'id' => 'address', 'autocomplete' => 'off', 'label' => false, 'required' => true]) ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="position-relative row mb-3">
                                                <?php
                                                if (count($errors)) {
                                                    if (array_key_exists('zip', $errors)) {
                                                        $input_zip_style = 'is-invalid';
                                                    } else {
                                                        $input_zip_style = '';
                                                    }
                                                } else {
                                                    $input_zip_style = '';
                                                }
                                                ?>
                                                <label for="zip" class="form-label col-sm-4 col-form-label">
                                                    Почтовый индекс
                                                </label>
                                                <div class="col-sm-8">
                                                    <?= $this->Form->control('zip', ['class' => 'form-control ' . $input_zip_style, 'id' => 'zip', 'autocomplete' => 'off', 'label' => false, 'required' => true]) ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="position-relative row mb-3">
                                                <?php
                                                if (count($errors)) {
                                                    if (array_key_exists('city', $errors)) {
                                                        $input_city_style = 'is-invalid';
                                                    } else {
                                                        $input_city_style = '';
                                                    }
                                                } else {
                                                    $input_city_style = '';
                                                }
                                                ?>
                                                <label for="city" class="form-label col-sm-4 col-form-label">
                                                    Город
                                                </label>
                                                <div class="col-sm-8">
                                                    <?= $this->Form->control('city', ['class' => 'form-control ' . $input_city_style, 'id' => 'city', 'autocomplete' => 'off', 'label' => false, 'required' => true]) ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <h5 class="card-title mt-4">Контакт</h5>

                                    <hr>

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="position-relative row mb-3">
                                                <?php
                                                if (count($errors)) {
                                                    if (array_key_exists('email', $errors)) {
                                                        $input_email_style = 'is-invalid';
                                                    } else {
                                                        $input_email_style = '';
                                                    }
                                                } else {
                                                    $input_email_style = '';
                                                }
                                                ?>
                                                <label for="email" class="form-label col-sm-4 col-form-label">
                                                    Email
                                                </label>
                                                <div class="col-sm-8">
                                                    <?= $this->Form->control('email', ['class' => 'form-control ' . $input_email_style, 'id' => 'email', 'autocomplete' => 'off', 'label' => false, 'required' => true]) ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="position-relative row mb-3">
                                                <?php
                                                if (count($errors)) {
                                                    if (array_key_exists('phone', $errors)) {
                                                        $input_phone_style = 'is-invalid';
                                                    } else {
                                                        $input_phone_style = '';
                                                    }
                                                } else {
                                                    $input_phone_style = '';
                                                }
                                                ?>
                                                <label for="phone" class="form-label col-sm-4 col-form-label">
                                                    Телефон
                                                </label>
                                                <div class="col-sm-8">
                                                    <?= $this->Form->control('phone', ['class' => 'form-control ' . $input_phone_style, 'id' => 'phone', 'autocomplete' => 'off', 'label' => false, 'required' => true]) ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <h5 class="card-title mt-4">Правила использования ресурса</h5>

                                    <hr>

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="position-relative row mb-3">
                                                <?php
                                                if (count($errors)) {
                                                    if (array_key_exists('terms', $errors)) {
                                                        $input_terms_style = 'is-invalid';
                                                    } else {
                                                        $input_terms_style = '';
                                                    }
                                                } else {
                                                    $input_terms_style = '';
                                                }
                                                ?>
                                                <label class="form-label form-check-label">
                                                    <?= $this->Form->checkbox('terms', ['class' => 'form-check-input ' . $input_terms_style, 'id' => 'terms', 'autocomplete' => 'off', 'label' => false, 'required' => true]) ?>
                                                    Прочитал/а и согласен/а с правилами.
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <?php echo $this->Form->button('<i class="lnr-envelope"></i>  Сохранить изменения', ['class' => 'mt-4 mb-2 me-2 btn btn-shadow btn-primary', 'escapeTitle' => false]); ?>

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