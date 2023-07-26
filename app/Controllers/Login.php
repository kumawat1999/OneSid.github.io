<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\LoginModel;

class Login extends BaseController
{
    
    protected $adminData;
    public function __construct(){
        $this->adminData = new LoginModel();
        helper(['form']);
    }


    //********************** */ login ********************************
    public function logins()
    {
        return view('Admin/login');
    }
    public function loginActions()
    {
        $ruls=[
            'username'=>'required',
            'password'=>'required',

        ];
        if(! $this->validate($ruls)){
            echo json_encode(['errors'=>validation_errors()]);
            // return redirect()->to('login');
            exit();
        }
       
                       $username= $this->request->getPost('username');
                       $password= $this->request->getPost('password');
      
        $admin= $this->adminData->where('username', $username)->first();

        if ($admin &&($password ==$admin['password'])) {
            // Valid credentials
            $session = session();
            $session->set('isLoggedIn',$admin);
            return redirect()->to('Dashboard');
        } else {
            // Invalid credentials
            return redirect()->back()->with('errors', 'Invalid username or password');
        }
       
    }



    //*********************************** */ Register ***************************************
    public function register()
    {   
        return view('Admin/AdminPanel/Register');
       
    }
}
