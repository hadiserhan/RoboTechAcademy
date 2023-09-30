<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\Database\RawSql;

class InitialCreate extends Migration
{
    public function up()
    {
        $this->db->query("
            CREATE TABLE IF NOT EXISTS `users_roles` (
                `id` int(11) NOT NULL AUTO_INCREMENT,
                `name` varchar(256) DEFAULT NULL,
                `slug` varchar(256) DEFAULT NULL,
                `is_admin` tinyint(4) DEFAULT NULL,
                `created_date` datetime NOT NULL DEFAULT current_timestamp(),
                `last_update` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
                PRIMARY KEY (`id`)
            ) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;"
          
        );

        $this->db->query("
            CREATE TABLE IF NOT EXISTS `users` (
                `id` int(11) NOT NULL AUTO_INCREMENT,
                `first_name` varchar(256) DEFAULT NULL,
                `father_name` varchar(256) DEFAULT NULL,
                `last_name` varchar(256) DEFAULT NULL,
                `gender` varchar(5) NOT NULL,
                `email` varchar(256) DEFAULT NULL,
                `mobile_number` varchar(128) DEFAULT NULL,
                `username` varchar(256) DEFAULT NULL,
                `password` varchar(256) DEFAULT NULL,
                `role_id` int(11) NOT NULL,
                `is_inactive` tinyint(1) NOT NULL,
                `language` varchar(255) DEFAULT NULL,
                `is_deleted` tinyint(1) NOT NULL,
                `created_date` datetime NOT NULL DEFAULT current_timestamp(),
                `last_update` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
                PRIMARY KEY (`id`),
                KEY `role_id` (`role_id`),
                CONSTRAINT `users_roles` FOREIGN KEY (`role_id`) REFERENCES `users_roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
          ) ENGINE=InnoDB AUTO_INCREMENT=9942 DEFAULT CHARSET=utf8;"
          
        );

        $this->db->query("
            CREATE TABLE IF NOT EXISTS `system_menus` (
                `id` int(11) NOT NULL AUTO_INCREMENT,
                `menu_name` varchar(100) DEFAULT NULL,
                `icon_class_name` varchar(256) DEFAULT NULL,
                `controller_name` varchar(100) DEFAULT NULL,
                `action_name` varchar(100) DEFAULT NULL,
                `order_id` varchar(10) DEFAULT NULL,
                `is_admin` tinyint(4) DEFAULT NULL,
                `created_date` datetime NOT NULL DEFAULT current_timestamp(),
                `last_update` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
                PRIMARY KEY (`id`)
            ) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;"
        );

        $builder =  $this->db->table('system_menus');
        // Dashboard
        $data = [
            'menu_name'             => 'Dashboard',
            'icon_class_name'       => 'bi-house-fill',
            'controller_name'       => '',
            'action_name'           => '',
            'order_id'              => '01',
            'is_admin'              => 1,
        ];
        $builder->insert($data);
        // Dashboard -> finance
        $data = [
            'menu_name'             => 'Finance',
            'icon_class_name'       => 'bi-bar-chart-fill',
            'controller_name'       => 'Dashboard',
            'action_name'           => 'finance',
            'order_id'              => '0101',
            'is_admin'              => 1,
        ];
        $builder->insert($data);
        // Dashboard -> analytics
        $data = [
            'menu_name'             => 'Analytics',
            'icon_class_name'       => 'bi-bar-chart-fill',
            'controller_name'       => 'Dashboard',
            'action_name'           => 'analytics',
            'order_id'              => '0102',
            'is_admin'              => 1,
        ];
        $builder->insert($data);

        // Administrator
        $data = [
            'menu_name'             => 'Administrator',
            'icon_class_name'       => 'bi-gear-wide-connected',
            'controller_name'       => '',
            'action_name'           => '',
            'order_id'              => '03',
            'is_admin'              => 1,
        ];
        $builder->insert($data);

         // Administrator -> Users
         $data = [
            'menu_name'             => 'Users',
            'icon_class_name'       => 'dx-icon-group',
            'controller_name'       => 'User',
            'action_name'           => 'Users',
            'order_id'              => '0302',
            'is_admin'              => 1,
        ];
        $builder->insert($data);

        // Administrator -> Users
        $data = [
            'menu_name'             => 'New User',
            'icon_class_name'       => 'bi-person-plus-fill',
            'controller_name'       => 'User',
            'action_name'           => 'new_user',
            'order_id'              => '0304',
            'is_admin'              => 1,
        ];
        $builder->insert($data);
    }

    public function down()
    {
        $this->db->query('DROP TABLE `users_roles`;');
        $this->db->query('DROP TABLE `users`;');
        $this->db->query('DROP TABLE `system_menus`;');

    }
}
