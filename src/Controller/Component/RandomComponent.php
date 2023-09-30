<?php

namespace App\Controller\Component;

use Cake\Controller\Component;

class RandomComponent extends Component
{
    public function generateCode($length = 10)
    {
        // inicializa variables
        $code = "";
        $i = 0;
        $possible = "0123456789bcdfghjkmnpqrstvwxyz";

        // agrega random
        while ($i < $length) {
            $char = substr($possible, mt_rand(0, strlen($possible) - 1), 1);

            if (!strstr($code, $char)) {
                $code .= $char;
                $i++;
            }
        }
        return $code;
    }
}