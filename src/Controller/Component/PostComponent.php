<?php

namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\Mailer\Mailer;

class PostComponent extends Component
 {

    public function sendLoginDataMessage( $message )
 {
        $email = new Mailer( 'default' );
        $email->setEmailFormat( 'text' )
        ->setFrom( array( 'noreply@legacytree.network' => 'Legacy Tree' ) )
        ->setTo( $message[ 'email' ] )
        ->setSubject( 'Password Reset for login to Legacy Tree' )
        ->setViewVars( array(
            'first_name' => $message[ 'first_name' ],
            'last_name' => $message[ 'last_name' ],
            'username' => $message[ 'username' ],
            'password' => $message[ 'password' ]
        ) )
        ->viewBuilder()
        ->setTemplate( 'forgot_password' );
        $email->deliver();
    }
}
