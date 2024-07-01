<?php

namespace App\Core;

class Exception extends \Exception
{
    public function errorMessage()
    {
        //error message
        $errorMsg = $this->getMessage() . ' Page introuvable';
        return $errorMsg;
    }
}
