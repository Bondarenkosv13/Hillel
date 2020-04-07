<?php
require_once 'vendor/autoload.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//Задние №1
/*
spl_autoload_register (function ($namespace)
{
    include_once __DIR__ . '/' . str_replace('\\', '/', $namespace) . ".php" ;
});
*/


use Http\Controllers\Admin\DashboardController;
use Http\Controllers\Admin\OrdersController;
use Http\Controllers\MainController;
use Http\Helpers\ImageHelper;
use Models\Order;
use Models\Product;
use Models\User;


$new = new DashboardController();
$new = new OrdersController();
$new = new MainController();
$new = new ImageHelper();
$new = new Order();
$new = new Product();
$new = new User();