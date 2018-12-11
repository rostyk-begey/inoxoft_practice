<?php
/**
 * Created by PhpStorm.
 * User: rostyslav
 * Date: 28.11.18
 * Time: 00:31
 */
require_once dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'Models/Category.php';

/**
 * Class CalendarController
 */
class CalendarController
{
    /**
     * @param string $eventTitle
     * @param DateTime $startDate
     * @param array $invitedUsers
     * @param Order $order
     * @return Calendar
     */
    public function createAction(string $eventTitle,DateTime $startDate,array $invitedUsers,Order $order){
        return new Calendar($eventTitle,$startDate,$invitedUsers,$order);
    }

    /**
     * @param Calendar $calendar
     * @param array $data
     */
    public function updateAction(Calendar $calendar, array $data){
        foreach ($data as $key=>$value){
            if (!empty($data[$key])){
                $funcName = 'set'.ucfirst($key);
                $calendar->$funcName($value);
            }
        }
    }

    /**
     * @param Calendar $calendar
     */
    public function viewAction(Calendar $calendar){
        var_dump($calendar);
    }

    /**
     * @param Calendar $calendar
     */
    public function deleteAction(Calendar $calendar){
        unset($calendar);
    }
}