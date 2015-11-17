<?php
/**
 * Created by PhpStorm.
 * User: Willem Van Wyk
 * Date: 2015-11-16
 * Time: 10:31 PM
 */
namespace realmDigital\User;

interface UserCommands
{

    /**
     * @param $name
     * @param $surname
     * @param $numbers
     *
     * return User
     */
    function createUser($name, $surname, $numbers);

    /**
     * @param $id
     *
     * @return User
     */
    function getUser($id);

    /**
     * @param User $user
     *
     * @return
     */
    function updateUser(User $user);

    /**
     * @param $userId
    */
    function deleteUser($userId);
}
