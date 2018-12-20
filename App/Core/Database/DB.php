<?php
/**
 * Created by PhpStorm.
 * User: rostyslav
 * Date: 14.12.18
 * Time: 16:34
 */

namespace App\Core\Database;

use \PDO;


final class DB
{
    const DB_HOST = 'localhost';
    const DB_NAME = 'inoxoft_practice';
    const DB_USER = 'root';
    const DB_PASSWORD = 'root';
    private static $pdo = null;

    /**
     * DB constructor.
     * @param null $pdo
     */

    public function _construct() {

        $conStr=sprintf("mysql:host=%s;dbname=%s", self::DB_HOST,self::DB_NAME);
        try {
            self::$pdo = new PDO($conStr, self::DB_USER, self::DB_PASSWORD);
        } catch (\PDOException $pe) {
            die($pe->getMessage());
        }

    }

    /**
     * @return PDO
     */
    public static function getConnection()
    {
        if (self::$pdo === null) {
            $conStr=sprintf("mysql:host=%s;dbname=%s", self::DB_HOST,self::DB_NAME);
            self::$pdo = new PDO($conStr, self::DB_USER, self::DB_PASSWORD);
        }

        return self::$pdo;
    }

}