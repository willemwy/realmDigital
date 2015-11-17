<?php
/**
 * Created by PhpStorm.
 * User: Willem Van Wyk
 * Date: 2015-11-16
 * Time: 10:56 PM
 */

namespace realmDigital\User;

class UserImplementedCommands implements UserCommands
{

    /**
     * @param $name
     * @param $surname
     * @param $numbers
     *
     * return User
     */
    function createUser($name, $surname, $numbers)
    {

    }

    /**
     * @param $id
     *
     * @return User
     */
    function getUser($id)
    {
        return new User($id, "name", "surname",["0848300757"]);
    }

    /**
     * @param User $user
     */
    function updateUser(User $user)
    {

    }

    /**
     * @param $userId
     */
    function deleteUser($userId)
    {

    }
}
