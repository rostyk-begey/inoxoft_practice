<?php
/**
 * Created by PhpStorm.
 * User: rostyslav
 * Date: 14.12.18
 * Time: 20:50
 */

namespace App\Users\Models\Repositories;
use App\Users\Models\ModelInterface;
use App\Users\Models\User;
/**
 * Class AbstractRepository
 */
abstract class AbstractRepository
{


    public function save(ModelInterface $model){
        $table = $model->getTableName();
        $columns = implode(",", $model->getColumnList());
        $values = implode(",", $model->getValuesList());
        $sql = "
        INSERT INTO {$table} (
          {$columns}
        ) VALUES (
          {$values}
        )
        ";

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

        //return
    }
}