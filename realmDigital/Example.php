<?php
use realmDigital\User\User\UserImplementedCommands;
use realmDigital\Book\Book;

class Example
{
    public static function run ()
    {
        $book = new Book(new UserImplementedCommands());
        $friends = [
            ["Pieter", "Swart", ["0841239876"]],
            ["Michael", "Nel", ["0820987123"]],
            ["Scotty", "Scott", ["0834618342"]]
        ];

        foreach($friends as $friend)
        {
            $friends[] = $book->createUser($friend);
        }

        $book->deleteUser($friends[0]->getId());
        $user = $book->getUser($friends[1]->getId());
        $book->updateUser($user->getId(), $user->getName(), $user->getSurname(), ["some new number"]);
    }
}
