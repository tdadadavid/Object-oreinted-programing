<?php

class Person
{
    public string $name;
    public int $age;

    /**
     * Person constructor.
     * @param string $name
     * @param int $age
     */
    public function __construct(string $name, int $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function getName()
    {
        echo $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function job()
    {
        return $this->getName() . " has no job";
    }

    public function favouriteTeam()
    {
        return "Barca";
    }

    public function thingsDoneAtNight()
    {
      echo "He cooks at night";
    }
}

$bob = new Person("Bob" , 23);
$bob->getName();


$bob->thingsDoneAtNight();