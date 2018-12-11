<?php
/**
 * Created by PhpStorm.
 * User: rostyslav
 * Date: 06.12.18
 * Time: 20:13
 */
namespace App\Core;

class Kernel
{
    public function app(){
        //var_dump($_GET);

        //var_dump(__METHOD__);

        $module = 'users';
        $className = 'App\\'.ucfirst($module).'\\Controllers\\'.ucfirst($module).'Controller';
        $obj = new $className();

        $action = $_GET["action"];
        //echo $action;
        $obj->$action();
    }
}