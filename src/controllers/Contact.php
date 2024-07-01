<?php

namespace App\Controllers;

use App\Forms\FormContact;
use App\Models\ContactModels;
use App\Core\Request;

class Contact
{   
    public function contact()
    {
        $request = new Request();
        $submit = $request->post('contact');
        //var_dump($request);
        if (isset($submit)) {
           
            $contact = new ContactModels($request->post('contact'));
            $formContact = new FormContact($contact);
            $controle = $formContact->validate();

            /*
            echo '<pre>';
            var_dump($controle);
            die()*/   
        }
        // créer un model contact

 
        /*
        (!$controle) {
           
        }
        */
       

        require('../src/views/frontend/contact/index.php');
    }

}
