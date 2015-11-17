<?php
namespace realmDigital\Book;

use realmDigital\User\UserCommands;
use realmDigital\User\User;

class Book
{
    /**
     * @var UserCommands
     */
    private $handler;

    /**
     * Book constructor.
     *
     * @param UserCommands $handler
     */
    public function __construct(UserCommands $handler)
    {
        $this->handler = $handler;
    }

    /**
     * @param string $name
     * @param string $surname
     * @param array  $numbers
     */
    public function createUser($name, $surname, $numbers)
    {
        $this->handler->createUser($name, $surname, $numbers);
    }

    /**
     * @param $userId
     *
     * @return User
     */
    public function getUser($userId)
    {
        return $this->handler->getUser();
    }

    /**
     * @param $userId
     */
    public function deleteUser($userId)
    {
        $this->handler->deleteUser($userId);
    }

    /**
     * @param $id
     * @param $name
     * @param $surname
     * @param $numbers
     */
    public function updateUser($id, $name, $surname, $numbers)
    {
        $user = new User($id, $name, $surname, $numbers);
        $this->handler->updateUser($user);
    }
}
