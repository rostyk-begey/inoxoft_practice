<?php
/**
 * Created by PhpStorm.
 * User: rostyslav
 * Date: 27.11.18
 * Time: 20:06
 */

/**
 * Class Order
 */
class Order
{
    /**
     * @var int
     */
    private $incrementId;
    /**
     * @var Product
     */
    private $product;
    /**
     * @var User
     */
    private $user;
    /**
     * @var DateTime
     */
    private $createdAt;

    /**
     * Order constructor.
     * @param int $incrementId
     * @param Product $product
     * @param User $user
     * @param DateTime $createdAt
     */
    public function __construct(int $incrementId,Product $product,User $user,DateTime $createdAt)
    {
        $this->incrementId = $incrementId;
        $this->product = $product;
        $this->user = $user;
        $this->createdAt = $createdAt;
    }

    /**
     * @return int
     */
    public function getIncrementId(): int
    {
        return $this->incrementId;
    }

    /**
     * @param int $incrementId
     */
    public function setIncrementId(int $incrementId)
    {
        $this->incrementId = $incrementId;
    }

    /**
     * @return Product
     */
    public function getProduct(): Product
    {
        return $this->product;
    }

    /**
     * @param Product $product
     */
    public function setProduct(Product $product)
    {
        $this->product = $product;
    }

    /**
     * @return User
     */
    public function getUser(): User
    {
        return $this->user;
    }

    /**
     * @param User $user
     */
    public function setUser(User $user)
    {
        $this->user = $user;
    }

    /**
     * @return DateTime
     */
    public function getCreatedAt(): DateTime
    {
        return $this->createdAt;
    }

    /**
     * @param DateTime $createdAt
     */
    public function setCreatedAt(DateTime $createdAt)
    {
        $this->createdAt = $createdAt;
    }



}