<?php

namespace App\Controllers\Users;

use App\Models;
use App\Controllers\BaseController;
use App\Controllers\Home;
use App\Models\UsersModel;

class Users extends BaseController
{

    public function index(): string
    {
        $home = new Home();
        $view_menu_config = $home->getHeaderMenuData();

        $usersModel = new UsersModel();
        $view["Allusers"] = $usersModel->getAllUsers();
        $view_menu_config["controllerAction"] = "User/users";
        return view('app',$view_menu_config)
                .view('Users\view_users',$view);
    }

    public function manage_user(): string
    {
        
        $home = new Home();
        $view_menu_config = $home->getHeaderMenuData();
        $view_menu_config["controllerAction"] = "User/manage_user";
        $usersModel = new UsersModel();

        return view('app',$view_menu_config)
                .view('Users\new_user');
    }
}
