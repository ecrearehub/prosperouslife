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
                        <div class="alert alert-info fade show" role="alert">
                            Поля, обозначенные значком * требуется обязательно заполнить.
                        </div>

                        <?= $this->Flash->render() ?>

                        <div class="row">
                            <div class="col-sm-12">
                                <?= $this->Form->create($invitation) ?>

                                <div class="position-relative mb-3">
                                    <?php
                                    if (count($errors)) {
                                        if (array_key_exists('first_name', $errors)) {
                                            $input_first_name_style = 'is-invalid';
                                        } else {
                                            $input_first_name_style = '';
                                        }
                                    } else {
                                        $input_first_name_style = '';
                                    }
                                    ?>
                                    <label for="first_name" class="form-label">Имя*</label>
                                    <?= $this->Form->control('first_name', ['type' => 'text', 'class' => 'form-control ' . $input_first_name_style, 'id' => 'first_name', 'autocomplete' => 'off', 'label' => false, 'required' => true]) ?>
                                </div>
                                <div class="position-relative mb-3">
                                    <?php
                                    if (count($errors)) {
                                        if (array_key_exists('last_name', $errors)) {
                                            $input_last_name_style = 'is-invalid';
                                        } else {
                                            $input_last_name_style = '';
                                        }
                                    } else {
                                        $input_last_name_style = '';
                                    }
                                    ?>
                                    <label for="last_name" class="form-label">Фамилия*</label>
                                    <?= $this->Form->control('last_name', ['type' => 'text', 'class' => 'form-control' . $input_last_name_style, 'id' => 'last_name', 'autocomplete' => 'off', 'label' => false, 'required' => true]) ?>
                                </div>
                                <div class="position-relative mb-3">
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
                                    <label for="email" class="form-label">Email*</label>
                                    <?= $this->Form->control('email', ['type' => 'email', 'class' => 'form-control ' . $input_email_style, 'id' => 'email', 'autocomplete' => 'off', 'label' => false, 'required' => true]) ?>

                                </div>
                                <div class="position-relative mb-3">
                                    <?php
                                    if (count($errors)) {
                                        if (array_key_exists('subject', $errors)) {
                                            $input_subject_style = 'is-invalid';
                                        } else {
                                            $input_subject_style = '';
                                        }
                                    } else {
                                        $input_subject_style = '';
                                    }
                                    ?>
                                    <label for="subject" class="form-label">Тема*</label>
                                    <?= $this->Form->control('subject', ['type' => 'text', 'value' => 'Интересное предложение', 'class' => 'form-control ' . $input_subject_style, 'id' => 'subject', 'autocomplete' => 'off', 'label' => false, 'required' => true]) ?>
                                </div>
                                <div class="position-relative mb-3">
                                    <?php
                                    if (count($errors)) {
                                        if (array_key_exists('message', $errors)) {
                                            $input_message_style = 'is-invalid';
                                        } else {
                                            $input_message_style = '';
                                        }
                                    } else {
                                        $input_message_style = '';
                                    }
                                    ?>
                                    <label for="message" class="form-label">Текст приглашения*</label>
                                    <?= $this->Form->control('message', [
                                        'type' => 'textarea',
                                        'value' => 'Привет!

Я только что обнаружил интересное предложение в интернете.
Оно производит хорошее впечатление. Вам это интересно?

Вот адрес:
https://www.prosperouslife.club/sp/?r=' . $this->Identity->get('id') . '

Не торопитесь принимать решение,

внимательно изучите мое предложение

С искренним уважением 

' . $this->Identity->get('first_name') . ' ' . $this->Identity->get('last_name') . ' ',
                                        'class' => 'form-control ' . $input_message_style,
                                        'id' => 'message',
                                        'autocomplete' => 'off',
                                        'label' => false,
                                        'required' => true
                                    ]) ?>
                                </div>

                                <?php echo $this->Form->button('<i class="lnr-envelope"></i> Отправить приглашение', ['class' => 'mb-2 me-2 btn btn-shadow btn-primary', 'escapeTitle' => false]); ?>
                                <?php echo $this->Html->link('<i class="lnr-cross-circle"></i> Отменить', '/invitations/index/', ['class' => 'mb-2 me-2 btn btn-shadow btn-light', 'escape' => false]); ?>

                                <?= $this->Form->end() ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-lg-4">
                <div class="card-hover-shadow-2x mb-3 card">
                    <?php echo $this->element('support'); ?>
                </div>
                <div class="card-hover-shadow-2x mb-3 card">
                    <?php echo $this->element('invitations/statistics'); ?>
                </div>
            </div>
        </div>
    </div>
</div>