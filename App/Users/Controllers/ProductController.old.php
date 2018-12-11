<?php
/**
 * Created by PhpStorm.
 * User: rostyslav
 * Date: 27.11.18
 * Time: 23:22
 */

/**
 * Class ProductController
 */

require_once dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'Models/Product.php';
class ProductController
{
    /**
     * @param string $title
     * @param string $sku
     * @param string $description
     * @param int $price
     * @return Product
     */
    public function createAction(string $title,string $sku,string $description,int $price){
        return new Product($title,$sku,$description,$price);
    }

    /**
     * @param Product $product
     * @param array $data
     */
    public function updateAction(Product $product, array $data){
        foreach ($data as $key=>$value){
            if (!empty($data[$key])){
                $funcName = 'set'.ucfirst($key);
                $product->$funcName($value);
                //echo $funcName;
            }
        }
        /*if (!empty($data['title'])){
            $user->setEmail($data['email']);
        }
        if (!empty($data['firstName'])){
            $user->setFirstName($data['firstName']);
        }
        if (!empty($data['lastName'])){
            $user->setLastName($data['lastName']);
        }*/
    }

    /**
     * @param Product $product
     */
    public function viewAction(Product $product){
        var_dump($product);
    }

    /**
     * @param Product $product
     */
    public function deleteAction(Product $product){
        unset($product);
    }
}