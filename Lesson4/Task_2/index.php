<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


include_once 'classes/User.php';



$Bob = new User();
$Bob->setName('Bob');
$Bob->setAge('25');

print_r ($Bob->getAll());

