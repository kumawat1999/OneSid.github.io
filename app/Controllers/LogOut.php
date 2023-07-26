<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\LoginModel;

class LogOut extends BaseController
{
    
          protected $adminData;
          public function __construct(){
              $this->adminData = new LoginModel();
          }


          public function logoutadmin(){
            session()->destroy();
            return redirect()->to('login');
          }
}
