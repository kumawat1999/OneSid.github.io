<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\RegisterModel;

class RegisterCon extends BaseController
{
    protected $datas;
    public function __construct(){
        helper(['form']);
        $this->datas=new RegisterModel();
    }
        
          public function registered(){
            return view('Admin/Register');
          }

          public function registerAction(){

          }
}
