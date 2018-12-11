<?php
/**
 * Created by PhpStorm.
 * User: rostyslav
 * Date: 06.12.18
 * Time: 21:48
 */

namespace App\Users\Controllers;

use App\Core\Controllers\ControllerAbstract;

class UsersController extends ControllerAbstract
{
    public function index()
    {
        //echo 'Halellujah';

    }
    public function save()
    {
        print_r( $_POST);
    }
    public function create()
    {
        print_r($_SERVER['HTTP_HOST']);
        //print_r(dirname(dirname(__FILE__)));
        $path = dirname(dirname(__FILE__)).'/view/form.php';
        $sp = DIRECTORY_SEPARATOR;
        include(str_replace(array('/','\\'),$sp,$path));

        //print_r($_GET);
    }
}