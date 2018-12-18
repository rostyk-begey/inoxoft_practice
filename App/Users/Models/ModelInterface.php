<?php
/**
 * Created by PhpStorm.
 * User: rostyslav
 * Date: 14.12.18
 * Time: 20:47
 */

namespace App\Users\Models;


interface ModelInterface
{
    /**
     * @return array
     */
    public function getData(): array;
}