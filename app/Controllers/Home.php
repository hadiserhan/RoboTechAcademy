<?php

namespace App\Controllers;

use App\Models\MenusModel;

class Home extends BaseController
{
    public $load;
    public function index(): string
    {
        $session = session();

        $security = \Config\Services::security();
        $view["security"] =  $security;
        $newdata = [
            'role_slug'  => 'superadmin',
            'email'     => 'johndoe@some-site.com',
            'logged_in' => true,
        ];
        $session->set($newdata);

        $view["session"] =  $session;
        $view["nav"] = "1212";

        $MenusModel = new MenusModel();
        $view["menus"] = $MenusModel->getMenus();
        return view('app',$view);
    }

    public function getHeaderMenuData(){
        $session = session();

        $security = \Config\Services::security();
        $view["security"] =  $security;
        $newdata = [
            'role_slug'  => 'superadmin',
            'email'     => 'johndoe@some-site.com',
            'logged_in' => true,
        ];
        $session->set($newdata);

        $view["session"] =  $session;
        $view["nav"] = "1212";

        $MenusModel = new MenusModel();
        $view["menus"] = $MenusModel->getMenus();
        return $view;
    }
}
