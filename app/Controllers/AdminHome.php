<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AdminHome extends BaseController
{
public function adminindex(){
    $data=[];
    $data['main_content']='Admin/indexx';
    return view ('Admin/commen/allFiles',$data);
}

}
