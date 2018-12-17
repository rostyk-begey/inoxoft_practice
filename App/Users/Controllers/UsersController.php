<?php
/**
 * Created by PhpStorm.
 * User: rostyslav
 * Date: 06.12.18
 * Time: 21:48
 */

namespace App\Users\Controllers;

use App\Core\Controllers\ControllerAbstract;
use \PDO;
use App\Core\Database\DB;
use App\Users\Models\User;
use App\Users\Models\Repositories\UserRepository;

class UsersController extends ControllerAbstract
{
    private $user;
    private $repository;
    /**
     * UsersController constructor.
     */
    public function __construct()
    {
        $this->repository = new UserRepository();
    }

    public function index()
    {
        //echo 'Halellujah';

    }
    public function auth(){
        $servername = "localhost";
        $username = "root";
        $password = "root";
        $dbname = "inoxoft_practice";



        // Create connection
        try {
            $email = $_POST['email'];
            $pass = $_POST['password'];


            $conn = DB::getConnection();
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql = "SELECT * FROM users WHERE email = '{$email}'";
            $result = $conn->query($sql);
            $result = $result->fetch(PDO::FETCH_ASSOC);
            //strcmp($original['password'], 'string');

            if($pass == $result['password']){
                echo "Login successfully  \n"."Hello: '{$result['first_name']}' '{$result['last_name']}}'";
            }else {
                echo "Login failed!\nCheck entered login and password";//\n{$pass}\n{$result['password']}";
            }

        }
        catch(PDOException $e)
        {
            echo $sql . "<br>" . $e->getMessage();
        }

        $conn = null;
    }
    public function save()
    {
        //print_r( $_POST);
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $pass = $_POST['password'];

        $user = new User($first_name,$last_name,$email, $pass);
        $this->user = $user;
        //$_COOKIE['user_table'] = $user->getTableName();
        $user->setData($_POST);

        setcookie('user_table', $user->getTableName(), time()+36000, "/", "localhost", 0);
        setcookie('user_email', $user->getEmail(), time()+36000, "/", "localhost", 0);

        print_r($user->getData());

        $_SESSION['user_table'] = $user->getTableName();
        $_SESSION['user_email'] = $user->getEmail();

        echo $_SESSION['user_table'];
        echo "<br/>";


        //$sql = "INSERT INTO users (first_name, last_name, email, password) VALUES ('{$first_name}', '{$last_name}', '{$email}', '{$pass}')";

        $this->repository->save($user);

    }
    public function create()
    {
        //print_r($_SERVER['HTTP_HOST']);
        //print_r(dirname(dirname(__FILE__)));
        //echo phpinfo();
        $path = dirname(dirname(__FILE__)).'/view/register.php';
        $sp = DIRECTORY_SEPARATOR;
        include(str_replace(array('/','\\'),$sp,$path));

        //print_r($_GET);
    }
    public function login(){
        $path = dirname(dirname(__FILE__)).'/view/login.php';
        $sp = DIRECTORY_SEPARATOR;
        include(str_replace(array('/','\\'),$sp,$path));
    }
    public function delete(){
        //$user = $_COOKIE['user'];//  $_SESSION['user'];
        //print_r($user->getData());
        $this->repository->remove($_SESSION['user_table'],$_SESSION['user_email']);
    }
}