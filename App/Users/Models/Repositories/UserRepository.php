<?php
/**
 * Created by PhpStorm.
 * User: rostyslav
 * Date: 14.12.18
 * Time: 18:50
 */

namespace App\Users\Models\Repositories;

use App\Users\Models\User;
use App\Users\Models\Repositories\AbstractRepository;


class UserRepository extends AbstractRepository
{
    public static function find(): collection{

    }
    public static function load(int $id): User{

    }
    public static function remove(){

    }
}