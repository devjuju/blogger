<?php

namespace App\Validators;

use App\Core\Validator;

class ValidatorLogin extends Validator
{
    public $data;
    public function __construct($data)
    {
        $this->data = $data;
    }

    public function checkData()
    {   
        $resultEmail = $this->checkEmail($this->data->getEmail());
        $resultPassword = $this->checkPassword($this->data->getPassword());

        if ($resultEmail && $resultPassword === true) {
            return true;
        } else {
            $errors = [
                'email' => $resultEmail,
                'password' => $resultPassword,
            ];
            return $errors;

        }
    }

    public function checkEmail($email)
    {
        if(empty($email)) {
            return "Adresse email obligatoire";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return  "Adresse email invalide";
        } else {
            return true;
        }
    }

    public function checkPassword($password)
    {
        if(empty($password)) {
            return "Mot de passe obligatoire";
        } elseif ($this->isSmallThan($password, 10)) {
            return "Mot de passe invalide";
        } else {
            return true;
        }
    }
}
