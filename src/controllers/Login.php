<?php

namespace App\Controllers;
use App\Core\Request;

use App\Forms\FormLogin;
use App\Models\LoginModels;
use App\Models\UsersModels;


class Login
{
    public function login()
    {   
     
        $request = new Request;
        $submit = $request->post('login');
        if (isset($submit)){
            $login = new UsersModels($request->post('login'));
            $formLogin = new FormLogin($login);
            $controle = $formLogin->validate();
        }

        
        require('../src/views/frontend/login/index.php');
    }
}
