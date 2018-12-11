<?php
/**
 * Created by PhpStorm.
 * User: rostyslav
 * Date: 28.11.18
 * Time: 0:17
 */

require_once dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'Models/User.php';

/**
 * Class OrderController
 */
class OrderController
{
    /**
     * @param int $incrementId
     * @param Product $product
     * @param User $user
     * @param DateTime $createdAt
     * @return Order
     */
    public function createAction(int $incrementId,Product $product,User $user,DateTime $createdAt){
        return new Order($incrementId,$product,$user,$createdAt);
    }

    /**
     * @param Order $order
     * @param array $data
     */
    public function updateAction(Order $order, array $data){
        foreach ($data as $key=>$value){
            if (!empty($data[$key])){
                $funcName = 'set'.ucfirst($key);
                $order->$funcName($value);
            }
        }
    }

    /**
     * @param Order $order
     */
    public function viewAction(Order $order){
        var_dump($order);
    }

    /**
     * @param Order $order
     */
    public function deleteAction(Order $order){
        unset($order);
    }
}