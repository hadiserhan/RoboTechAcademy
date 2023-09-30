<?php

namespace App\Models;

use CodeIgniter\Model;
use Config\Database;
use stdClass;

class MenusModel extends Model{

    
    
    public function getMenus(){
        // $db = \Config\Database::connect();
        $builder = $this->db->table('system_menus');
        $builder->select('*');
        $builder->orderBy('order_id');
        $original_menus = $builder->get()->getResult();
        
        $builder = $this->db->table('system_menus');
        $builder->select('*');
        $builder->where('LENGTH(order_id) = 2');
        $builder->orderBy('order_id');
        $selected_menus = $builder->get()->getResult();

        $return_Menus = [];
       
        foreach ($selected_menus as $menu)
        {
            $child_Menu = new stdClass();
            $child_Menu->text = $menu->menu_name;
            $child_Menu->id = $menu->id;
            $child_Menu->icon_class_name = $menu->icon_class_name;
            $child_Menu->action_name = $menu->action_name;
            $child_Menu->controller_name = $menu->controller_name;
            $child_Menu->order_id = $menu->order_id;
            $child_Menu->items = $this->generateChildMenu($original_menus,$menu);
            $return_Menus[] = $child_Menu;
        }

        return $return_Menus;
    }

    private function generateChildMenu($original_menus , $parent_menu){


        $filter_original_menus = [];

        foreach ($original_menus as $originial_menu){
            if(strlen($originial_menu->order_id) == strlen($parent_menu->order_id) + 2 
                    && str_starts_with($originial_menu->order_id, $parent_menu->order_id))
            {
                $filter_original_menus[] = $originial_menu;
            }
        }
        
        $childMenus = [];
        foreach ($filter_original_menus as $childmenu){
            $menu_item = new stdClass();
            $menu_item->text = $childmenu->menu_name;
            $menu_item->id = $childmenu->id;
            $menu_item->icon_class_name = $childmenu->icon_class_name;
            $menu_item->action_name = $childmenu->action_name;
            $menu_item->controller_name = $childmenu->controller_name;
            $menu_item->order_id = $childmenu->order_id;
            $menu_item->items = $this->generateChildMenu($original_menus,$childmenu);
            $childMenus[] = $menu_item;
        }

        return $childMenus;

    }
}
