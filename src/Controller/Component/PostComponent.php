<?php

namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\Mailer\Mailer;

class PostComponent extends Component
{

    public function sendLoginDataMessage($message)
    {
        $email = new Mailer('default');
        $email->setEmailFormat('text')
            ->setFrom(array('noreply@prosperouslife.club' => 'Prosperous Life Club'))
            ->setTo($message['email'])
            ->setSubject('Ваш пароль')
            ->setViewVars(
                array(
                    'first_name' => $message['first_name'],
                    'last_name' => $message['last_name'],
                    'username' => $message['username'],
                    'password' => $message['password']
                )
            )
            ->viewBuilder()
            ->setTemplate('forgot_password');
        $email->deliver();
    }

    public function sendWelcomeMessage($message)
    {
        $email = new Mailer('default');
        $email->setEmailFormat('text')
            ->setFrom(array('noreply@prosperouslife.club' => 'Prosperous Life Club'))
            ->setTo($message['email'])
            ->setSubject('Ваша регистрация')
            ->setViewVars(
                array(
                    'first_name' => $message['first_name'],
                    'last_name' => $message['last_name'],
                    'username' => $message['username'],
                    'password' => $message['password'],
                    'user_id' => $message['user_id']
                )
            )
            ->viewBuilder()
            ->setTemplate('welcome');
        $email->deliver();
    }

    public function sendUnknownMessage($message)
    {
        $email = new Mailer('default');
        $email->setEmailFormat('text')
            ->setFrom(array('noreply@prosperouslife.club' => 'Prosperous Life Club'))
            ->setTo($message['email'])
            ->setSubject('Ваша регистрация')
            ->setViewVars(
                array(
                    'first_name' => $message['first_name'],
                    'last_name' => $message['last_name']
                )
            )
            ->viewBuilder()
            ->setTemplate('unknown');
        $email->deliver();
    }

    public function sendSponsorMessage($message)
    {
        $email = new Mailer('default');
        $email->setEmailFormat('text')
            ->setFrom(array('noreply@prosperouslife.club' => 'Prosperous Life Club'))
            ->setTo($message['email'])
            ->setSubject('Новая регистрация')
            ->setViewVars(
                array(
                    'sponsor_first_name' => $message['sponsor_first_name'],
                    'sponsor_last_name' => $message['sponsor_last_name'],
                    'first_name' => $message['first_name'],
                    'last_name' => $message['last_name']
                )
            )
            ->viewBuilder()
            ->setTemplate('sponsor');
        $email->deliver();
    }
}