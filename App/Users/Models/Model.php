<?php
/**
 * Created by PhpStorm.
 * User: rostyslav
 * Date: 14.12.18
 * Time: 18:47
 */

namespace App\Users\Models;


abstract class Model implements ModelInterface
{

    protected $data = [];

    /**
     * @return array
     */

    public function getData(): array
    {
        return $this->data;
    }


    abstract public static function getTableName();

    /**
     * @param $data
     */
    public function setData(array $data){
        //$this->setFirstName($data['']);
        $this->data = $data;
        foreach ($data as $k=>$v){
            //echo "{$k}($v)";

            $methodName = "set".str_replace('_', '', ucwords($k, '-'));
            if(method_exists($this,$methodName)){
                //echo "{data[$methodName]} = {$v}";
                //$this->data[$methodName] = $v;
                $this->$methodName($v);
            }
        }
    }
}