<?php
/**
 * Created by PhpStorm.
 * User: rostyslav
 * Date: 06.12.18
 * Time: 21:48
 */

namespace App\Users\Controllers;

use App\Core\Controllers\ControllerAbstract;
use App\Core\Database\DB;
use \PDO;
use App\Users\Models\User;
use App\Users\Models\Repositories\UserRepository;

class UsersController extends ControllerAbstract
{

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


            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "SELECT password FROM users WHERE email = {$email}";
            // use exec() because no results are returned
            $stmt = $conn->query($sql);
            $row =$stmt->fetchObject();
            if($pass == $result->password){
                echo "Logined successfully";
            }else {
                echo "Login failed";
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

        $user = new User($first_name,$last_name,$last_name, $last_name);
        $user->setData($_POST);
        print_r($user->getData());


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
}