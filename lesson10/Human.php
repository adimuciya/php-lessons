<?php


class Human
{
    protected string $name;
    protected int $age;

    /**
     * Human constructor.
     * @param string $name
     * @param int $age
     */
//    public function __construct(string $name, int $age)
//    {
//        $this->name = $name;
//        $this->age = $age;
//    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @param int $age
     */
    public function setAge(int $age): void
    {
        $this->age = $age;
    }

}