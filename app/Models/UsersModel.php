<?php

namespace App\Models;

use CodeIgniter\Model;
use Config\Database;
use stdClass;

class UsersModel extends Model{

    public function getAllUsers(){
        // $db = \Config\Database::connect();
        $builder = $this->db->table('users');
        $builder->select('*');
        $allusers = $builder->get()->getResult();
        return $allusers;
    }
}
