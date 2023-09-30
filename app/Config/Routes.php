<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\Users;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('Database/update', 'Database\db::updateRoboTechDatabase');
$routes->get('users', 'Users\Users::index');
$routes->get('manage_user', 'Users\Users::manage_user');
