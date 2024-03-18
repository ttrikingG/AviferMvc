<?php

namespace app\controllers\admin;

use app\models\site\User;
use app\validate\Validate;
use app\controllers\ContainerController;

class AdminUserController extends ContainerController
{
  
    public function store()
    {
        if(!isset($_SESSION['admin_logged'])){
            redirect ('/');
        }
        
    }
}