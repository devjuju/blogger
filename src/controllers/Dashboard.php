<?php

namespace App\Controllers;

class Dashboard
{
    public function dashboard()
    {
        require('../src/views/backend/dashboard/index.php');
    }
}
