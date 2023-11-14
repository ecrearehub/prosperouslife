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
                                    Изменить фотографию
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
                            <i class=" header-icon pe-7s-photo icon-gradient bg-happy-itmeo"></i>
                            Изменить фотографию
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

                                    <?= $this->Flash->render() ?>

                                    <?= $this->Form->create(null, ['url' => ['controller' => 'Users', 'action' => 'profilethumb'], 'enctype' => 'multipart/form-data']); ?>

                                    <div class="row">
                                        <div class="col-sm-12">

                                            <div class="position-relative row mb-3">
                                                <?php
                                                if (count($errors)) {
                                                    if (array_key_exists('profilethumb', $errors)) {
                                                        $input_profilethumb_style = 'is-invalid';
                                                    } else {
                                                        $input_profilethumb_style = '';
                                                    }
                                                } else {
                                                    $input_profilethumb_style = '';
                                                }
                                                ?>
                                                <label for="profilethumb" class="form-label col-sm-4 col-form-label">
                                                    Avatar:
                                                    <br>Формат: .png, .jpg, .jpeg
                                                    <br>Максимальный размер: 1 MB
                                                </label>
                                                <div class="col-sm-8">
                                                    <?= $this->Form->control('profilethumb', ['type' => 'file', 'form-control ' . $input_profilethumb_style, 'id' => 'profilethumb', 'label' => false, 'accept' => '.png, .jpg, .jpeg', 'required' => true]) ?>
                                                    <?php
                                                    if (count($errors)) {
                                                        if (array_key_exists('profilethumb', $errors)) {
                                                            foreach ($errors['profilethumb'] as $error) {
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