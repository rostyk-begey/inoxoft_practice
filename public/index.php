<?php
/**
 * Created by PhpStorm.
 * User: rostyslav
 * Date: 06.12.18
 * Time: 20:57
 */


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require dirname(__DIR__) . '/vendor/autoload.php';

$kernel = new App\Core\Kernel();
$kernel->app();

