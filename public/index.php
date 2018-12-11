<?php
/**
 * Created by PhpStorm.
 * User: rostyslav
 * Date: 06.12.18
 * Time: 20:57
 */

require dirname(__DIR__) . '/vendor/autoload.php';


$kernel = new App\Core\Kernel();
$kernel->app();

