<?php
/**
 * Created by PhpStorm.
 * User: rostyslav
 * Date: 27.11.18
 * Time: 23:39
 */
require_once dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'Models/Category.php';

/**
 * Class CategoryController
 */
class CategoryController
{
    /**
     * @param string $title
     * @param string $desc
     * @param Category $parent
     * @return Category
     */
    public function createAction(string $title,string $desc,Category $parent){
        return new Category($title,$desc,$parent);
    }

    /**
     * @param Category $category
     * @param array $data
     */
    public function updateAction(Category $category, array $data){
        foreach ($data as $key=>$value){
            if (!empty($data[$key])){
                $funcName = 'set'.ucfirst($key);
                $category->$funcName($value);
            }
        }
    }

    /**
     * @param Category $category
     */
    public function viewAction(Category $category){
        var_dump($category);
    }

    /**
     * @param Category $category
     */
    public function deleteAction(Category $category){
        unset($category);
    }
}