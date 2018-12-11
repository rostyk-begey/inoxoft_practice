<?php
/**
 * Created by PhpStorm.
 * User: rostyslav
 * Date: 27.11.18
 * Time: 19:59
 */
class Product{

    /**
     * @var string
     */
    private $title;
    /**
     * @var string
     */
    private $sku;
    /**
     * @var string
     */
    private $description;
    /**
     * @var int
     */
    private $price;
    /**
     * @var Category
     */
    private $category;
    /**
     * Product constructor.
     * @param string $title
     * @param int $sku
     * @param string $desc
     * @param int $price
     */
    public function __construct(string $title,string $sku,string $desc,int $price){
        $this->title = $title;
        $this->sku = $sku;
        $this->description = $desc;
        $this->price = $price;
        //$this->category = $cat;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title)
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getSku(): string
    {
        return $this->sku;
    }

    /**
     * @param string $sku
     */
    public function setSku(string $sku)
    {
        $this->sku = $sku;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    /**
     * @return int
     */
    public function getPrice(): int
    {
        return $this->price;
    }

    /**
     * @param int $price
     */
    public function setPrice(int $price)
    {
        $this->price = $price;
    }

    /**
     * @return Category
     */
    public function getCategory(): Category
    {
        return $this->category;
    }

    /**
     * @param Category $category
     */
    public function setCategory(Category $category)
    {
        $this->category = $category;
    }



}