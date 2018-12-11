<?php
/**
 * Created by PhpStorm.
 * User: rostyslav
 * Date: 27.11.18
 * Time: 20:00
 */

/**
 * Class Category
 */
class Category{
    /**
     * @var string
     */
    private $title;
    /**
     * @var string
     */
    private $description;
    /**
     * @var Category
     */
    private $parent;

    /**
     * Category constructor.
     * @param $title
     * @param $desc
     * @param $parent
     */
    public function __construct(string $title,string $desc,Category $parent)
    {
        $this->title = $title;
        $this->description = $desc;
        $this->parent = $parent;
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
     * @return Category
     */
    public function getParent(): Category
    {
        return $this->parent;
    }

    /**
     * @param Category $parent
     */
    public function setParent(Category $parent)
    {
        $this->parent = $parent;
    }



};