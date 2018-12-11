<?php
/**
 * Created by PhpStorm.
 * User: rostyslav
 * Date: 27.11.18
 * Time: 20:10
 */

/**
 * Class Calendar
 */
class Calendar
{
    /**
     * @var string
     */
    private $eventTitle;
    /**
     * @var DateTime
     */
    private $startDate;
    /**
     * @var array
     */
    private $invitedUsers;
    /**
     * @var Order
     */
    private $order;


    /**
     * Calendar constructor.
     * @param string $eventTitle
     * @param $startDate
     * @param $invitedUsers
     * @param $order
     */
    public function __construct(string $eventTitle,DateTime $startDate,array $invitedUsers,Order $order)
    {
        $this->eventTitle = $eventTitle;
        $this->startDate = $startDate;
        $this->invitedUsers = $invitedUsers;
        $this->order = $order;
    }

    /**
     * @return string
     */
    public function getEventTitle(): string
    {
        return $this->eventTitle;
    }

    /**
     * @param string $eventTitle
     */
    public function setEventTitle(string $eventTitle)
    {
        $this->eventTitle = $eventTitle;
    }

    /**
     * @return DateTime
     */
    public function getStartDate(): DateTime
    {
        return $this->startDate;
    }

    /**
     * @param DateTime $startDate
     */
    public function setStartDate(DateTime $startDate)
    {
        $this->startDate = $startDate;
    }

    /**
     * @return array
     */
    public function getInvitedUsers(): array
    {
        return $this->invitedUsers;
    }

    /**
     * @param array $invitedUsers
     */
    public function setInvitedUsers(array $invitedUsers)
    {
        $this->invitedUsers = $invitedUsers;
    }

    /**
     * @return Order
     */
    public function getOrder(): Order
    {
        return $this->order;
    }

    /**
     * @param Order $order
     */
    public function setOrder(Order $order)
    {
        $this->order = $order;
    }



}