<?php
namespace App\Controllers\Database;

use App\Controllers\BaseController;
use CodeIgniter\Database\MigrationRunner;
use Config\Migrations;

class db extends BaseController
{
    public function updateRoboTechDatabase()
    {
        try
        {
            // if ( ! $this->_has_privileges(PRIV_SYSTEM_SETTINGS, TRUE))
            // {
            //     throw new Exception('You do not have the required privileges for this task!');
            // }
            
            $migration = new \Config\Migrations;
            $migrationRunner = new MigrationRunner($migration ,null);
            if (!$migrationRunner->latest())
            {
                throw new \Exception($migrationRunner->getCliMessages()[0]);
            }

            $view = ['success' => TRUE];
        }
        catch (\Exception $exc)
        {
            $view = ['success' => FALSE, 'exception' => $exc->getMessage()];
        }

        return view('update', $view);
    }
}
