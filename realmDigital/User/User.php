<?php
namespace realmDigital\User;

class User
{
    /**
     * @var int
     */
    private $id;
    /**
     * @var string
     */
    private $name;
    /**
     * @var string
     */
    private $surname;

    /**
     * @var Number[]
     */
    private $numbers;

    /**
     * User constructor.
     *
     * @param int    $id
     * @param string $name
     * @param string $surname
     */
    public function __construct($id, $name, $surname, $numbers)
    {
        $this->id = $id;
        $this->name = $name;
        $this->surname = $surname;
        $this->numbers = $numbers;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * @return Number[]
     */
    public function getNumbers()
    {
        return $this->numbers;
    }


}
