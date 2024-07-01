<?php

namespace App\Controllers;
use App\Core\Request;
use App\Forms\FormRegister;
use App\Models\UsersModels;

class Register
{
    public function register()
    {   
    //$users = new UsersModels();
   //$test = $users->findAll();
    //print_r($test);
        
        $request = new Request;
        $submit = $request->post('register');
        if (isset($submit)){
            $register = new UsersModels($request->post('register'));
            $formRegister = new FormRegister($register);
            $controle = $formRegister->validate();




            
        }
       
        require('../src/views/frontend/register/index.php');
    }
}
