<?php
/**
 * Created by PhpStorm.
 * User: rostyslav
 * Date: 14.12.18
 * Time: 20:50
 */

namespace App\Users\Models\Repositories;
use App\Users\Models\ModelInterface;
use App\Users\Models\Model;
use App\Users\Models\User;
use App\Core\Database\DB;
use \PDO;
/**
 * Class AbstractRepository
 */
abstract class AbstractRepository
{

    private $modelInstance;

    /**
     * AbstractRepository constructor.
     * @param $modelInstance
     */
    public function __construct(string $model)
    {
        $this->modelInstance = 'App\\'.ucfirst($model).'s\\Models\\'.ucfirst($model);
    }


    /**
     * @param ModelInterface $model
     * @return array
     */
    public function getColumnList(ModelInterface $model): array
    {
        return array_keys($model->getData());
    }

    /**
     * @param ModelInterface $model
     * @return array
     */
    public function getValueList(ModelInterface $model): array
    {
        return array_values($model->getData());
    }


    public function save(ModelInterface $model){
        $table = $model::getTableName();
        $columns = implode(",", $this->getColumnList($model));
        $values = implode("','", $this->getValueList($model));
        $sql = "
        INSERT INTO {$table} (
          {$columns}
        ) VALUES (
          '{$values}'
        )
        ";
        //echo $sql;
        try {
            $conn = DB::getConnection();
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // use exec() because no results are returned
            $conn->exec($sql);
            echo "New record created successfully";
        }
        catch(PDOException $e)
        {
            echo $sql . "<br>" . $e->getMessage();
        }

    }


    public function remove($table, $email){
        //$table = $model->getTableName();
        //$email = $model->getEmail();
        $sql = "DELETE FROM {$table} WHERE (email = {$email})";
        //echo $sql;
        try {
            $conn = DB::getConnection();
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // use exec() because no results are returned
            $conn->exec($sql);
            echo "User deleted successfully";
        }
        catch(PDOException $e)
        {
            echo $sql . "<br>" . $e->getMessage();
        }

    }

    public function list(){

        $table = $this->modelInstance::getTableName();

        $sql = "
        SELECT * FROM {$table}
        ";

        $models = [];

        try {
            $conn = DB::getConnection();
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // use exec() because no results are returned
            //$conn->exec($sql);


            foreach ($conn->query($sql) as $row) {
                //$link = 'http://'.$_SERVER['SERVER_NAME'].'/?module=users&action=find&id=';
                //$action = $link . $row['id'];

                $model = new $this->modelInstance();
                $model->setData($row);
                array_push($models,$model);
            }
        }
        catch(PDOException $e)
        {
            echo $sql . "<br>" . $e->getMessage();
        }

        return $models;
    }
    public function find($id){

        $table = $this->modelInstance::getTableName();


        $sql = "
        SELECT * FROM {$table} WHERE id = {$id}
        ";

        $model = null;

        try {
            $conn = DB::getConnection();
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // use exec() because no results are returned
            //$conn->exec($sql);
            foreach ($conn->query($sql) as $row) {
                //$link = 'http://'.$_SERVER['SERVER_NAME'].'/?module=users&action=find&id=';
                //$action = $link . $row['id'];

                $model = new $this->modelInstance();
                $model->setData($row);
                var_dump($row);

            }

        }
        catch(PDOException $e)
        {
            echo $sql . "<br>" . $e->getMessage();
        }

        return $model;
    }
}