<?php
/**
 * Created by PhpStorm.
 * User: rostyslav
 * Date: 27.11.18
 * Time: 20:48
 */


require_once dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'Models/User.php';

/**
 * Class UsersController
 */
class UserController
{
    /**
     * @param string $firstName
     * @param string $lastName
     * @param string $email
     * @return User
     */
    public function createAction(string $firstName,string $lastName,string $email){
        return new User($firstName,$lastName,$email);
    }

    /**
     * @param User $user
     * @param array $data
     */
    public function updateAction(User $user, array $data){
        foreach ($data as $key=>$value){
            if (!empty($data[$key])){
                $funcName = 'set'.ucfirst($key);
                $user->$funcName($value);
            }
        }
        /*if (!empty($data['email'])){
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
     * @param User $user
     */
    public function viewAction(User $user){
        var_dump($user);
    }

    /**
     * @param User $user
     */
    public function deleteAction(User $user){
        unset($user);
    }
}