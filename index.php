<?php
/**
 * Created by PhpStorm.
 * User: rostyslav
 * Date: 27.11.18
 * Time: 21:08
 */
require_once "Controllers/UsersControllerr.php";
require_once "Controllers/ProductController.php";
require_once "Controllers/CategoryController.php";

/**
 * User
 */
$user_controller = new UserController();
$user = $user_controller->createAction('testName','testLastName','testEmail');

$data = array(
    'firstName'=>'testName1',
    'lastName'=>'testLastName1',
    'email'=>'testEmail1'
);
$user_controller->updateAction($user,$data);
//$user_controller->viewAction($user);

/**
 * Category
 */
//$category_controller = new CategoryControler();


/**
 * Product
 */
$product_controller = new ProductController();
$product = $product_controller->createAction("test","1","dcesc_test",100);

//$product_controller->viewAction($product);
$product_controller->updateAction($product,array('title'=>'test1','sku'=>"2","description"=>"desc_test2"));
//$product_controller->viewAction($product);


/**
 * Order
 */

$date = new DateTime();
$date->setDate(2001, 2, 3);

$order_controller = new OrderController();
$order = $order_controller->createAction(Null,$product,$user,$date);
$order_controller->viewAction($order);

/**
 * Calendar
 */
$calendar_controller = new CalendarController();
$calendar = $calendar_controller->createAction("Order date",$date,array($user),$order);
$calendar_controller->viewAction($calendar);